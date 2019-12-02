<?php

namespace App\Http\Controllers;

use App\Ssn;
use App\Date;
use App\State;
use App\Status;
use App\Patient;
use App\SsnType;
use App\Address;
use App\Exports\DatesExport;
use App\Viality;
use App\Locality;
use Carbon\Carbon;
use App\Municipality;
use App\SettlementType;
use Illuminate\Http\Request;
use App\Http\Requests\StoreDateRequest;
use App\ZipCode;
use Illuminate\Support\Str;
use Maatwebsite\Excel\Facades\Excel;

use function App\Http\getDescriptionName;
use function App\Http\isValidUuid;

class DateController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $request->user()->authorizeRoles(['admin', 'user', 'analist', 'doctor']);

        $dates = Date::all();
        $status = Status::all();
        // dd($dates->first()->uuid);

        return view('dates.index', compact('dates', 'status'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $request->user()->authorizeRoles(['admin', 'user', 'analist', 'doctor']);

        $patients = Patient::all();
        $vialities = Viality::all();
        $settlement_types = SettlementType::all();
        $localities = Locality::all();
        $municipalities = Municipality::all();
        $states = State::all();
        $ssn_types = SsnType::all();
        $status = Status::all();
        $today = Carbon::now()->format('d/m/Y');

        return view('dates.create', compact(['patients', 'vialities', 'settlement_types', 'localities', 'municipalities', 'states', 'ssn_types', 'today', 'status']));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function store(StoreDateRequest $request)
    {
        // dd($request->all());
        $request->user()->authorizeRoles(['admin', 'user', 'analist', 'doctor']);
        $patient = Patient::where('id', $request->input('id-exist'))->first();
        if (!$patient) {
            $address = new Address();
            if ($request->filled('street')) {
                $address->street = ucfirst($request->input('street'));
            }
            if ($request->filled('number_ext')) {
                $address->number_ext = $request->input('number_ext');
            }
            if ($request->filled('number_int')) {
                $address->number_int = $request->input('number_int');
            }
            if ($request->filled('colony')) {
                $address->colony = ucfirst($request->input('colony'));
            }
            // dd($request->input('zip_code'));
            if ($request->filled('zip_code') && ZipCode::where('code', $request->input('zip_code'))->first()) {
                $address->zip_code()->associate(ZipCode::where('code', $request->input('zip_code'))->first());
            } else {
                if ($address->zip_code) {
                    $address->zip_code == null;
                }
            }
            if ($request->filled('viality') && $request->input('viality') != 'none') {
                $address->viality()->associate(Viality::where('name', $request->input('viality'))->first());
            }
            if ($request->filled('settlement_type') && $request->input('settlement_type') != 'none') {
                $address->settlement_type()->associate(SettlementType::where('name', $request->input('settlement_type'))->first());
            }
            if ($request->filled('locality') && $request->input('locality') != 'none') {
                $locality = Locality::where('code', getDescriptionName($request->input('locality')))->first();
                if ($locality) {
                    $address->locality()->associate($locality);
                } else {
                    $locality = new Locality();
                    $locality->code = getDescriptionName($request->input('locality'));
                    $locality->description = $request->input('locality');
                    $locality->municipality()->associate(Municipality::where('id', $request->input('municipality'))->first());
                    if ($locality->save()) {
                        $address->locality()->associate($locality);
                    }
                }
            }
            if ($request->filled('municipality') && $request->input('municipality') != 'none') {
                $address->municipality()->associate(Municipality::where('id', $request->input('municipality'))->first());
            }
            if ($request->filled('state') && $request->input('state') != 'none') {
                $address->state()->associate(State::where('code', $request->input('state'))->first());
            }
            $address->save();
    
            $ssn = new Ssn();
            if ($request->filled('number')) {
                $ssn->number = $request->input('number');
            }
            if ($request->filled('ssn')) {
                $ssn->ssn = strtoupper($request->input('ssn'));
            }
            if (SsnType::where('name', $request->input('ssn_type'))->first()) {
                $ssn->ssn_type()->associate(SsnType::where('name', $request->input('ssn_type'))->first());
            } else {
                $ssn->ssn_type()->associate(SsnType::where('name', 'ninguna')->first());
            }
            $ssn->save();
    
            $patient = new Patient();
            $patient->name = ucfirst($request->input('name'));
            $patient->paternal_lastname = ucfirst($request->input('paternal_lastname'));
            $patient->maternal_lastname = ucfirst($request->input('maternal_lastname'));
            $patient->phone = $request->input('phone');
            if ($request->filled('curp')) {
                $curp = strtoupper($request->input('curp'));
                $patient->curp = $curp;
                $yy = substr($request->input('curp'), 4, -12);
                $mm = substr($request->input('curp'), 6, -10);
                $dd = substr($request->input('curp'), 8, -8);
                $patient->birthdate = Carbon::createFromFormat("d.m.y", "$dd.$mm.$yy");
                $patient->sex = substr($request->input('curp'), 10, -7);
                $patient->birthplace()->associate(State::where('code', strtoupper(substr($request->input('curp'), 11, -5)))->first());
                $patient->ssn()->associate($ssn);
            }
            $patient->address()->associate($address);
            $patient->save();
        }
        $date = new Date();
        $date->uuid = (string) Str::uuid();
        $date->attention_date = Carbon::now();
        $date->diagnosis = $request->input('diagnosis');
        if($request->filled('status') && $request->has('status')) {
            $date->status()->associate(Status::where('name', $request->input('status'))->first());
        } else {
            $date->status()->associate(Status::where('name', 'pendiente')->first());
        }
        $date->user()->associate(auth()->user());
        $date->patient()->associate($patient);
        if($date->save()) {
            return redirect()->route('dates.show', $date->uuid)->with('message-store', '¡Cita creada!');
        }
        return redirect()->back()->withInput()->withErrors(['error', 'Ocurrió un error, inténtelo nuevamente.']);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Date  $date
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request, String $date)
    {
        $request->user()->authorizeRoles(['admin', 'user', 'analist', 'doctor']);

        if (isValidUuid($date)) {
            $date = Date::where('uuid', $date)->first();
            if ($date) {
                return view('dates.show', compact('date'));
            }
        }
        return abort('404');

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Date  $date
     * @param  bool  $new
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request, String $date)
    {
        $request->user()->authorizeRoles(['admin', 'user', 'analist', 'doctor']);
        
        if (isValidUuid($date)) {
            $date = Date::withTrashed()->where('uuid', $date)->first();
            if ($date) {
                $vialities = Viality::all();
                $settlement_types = SettlementType::all();
                $localities = Locality::all();
                $municipalities = Municipality::all();
                $states = State::all();
                $ssn_types = SsnType::all();
                $status = Status::all();
        
                // dd($date->first()->patient->ssn->number);
        
                return view('dates.edit', compact(['date', 'vialities', 'settlement_types', 'localities', 'municipalities', 'states', 'ssn_types', 'status']));
            }
        }
        return abort('404');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Date  $date
     * * @param  bool  $new
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, String $date)
    {
        $request->user()->authorizeRoles(['admin', 'user', 'analist', 'doctor']);

        if (isValidUuid($date)) {
            $date = Date::where('uuid', $date)->first();
            if ($date) {
                $address = $date->patient->address;
                if ($request->filled('street')) {
                    $address->street = ucfirst($request->input('street'));
                }
                if ($request->filled('number_ext')) {
                    $address->number_ext = $request->input('number_ext');
                }
                if ($request->filled('number_int')) {
                    $address->number_int = $request->input('number_int');
                }
                $address->colony = ucfirst($request->input('colony'));
                if ($request->filled('zip_code') && ZipCode::where('code', $request->input('zip_code'))->first()) {
                    $address->zip_code()->associate(ZipCode::where('code', $request->input('zip_code'))->first());
                } else {
                    if ($address->zip_code) {
                        $address->zip_code()->dissociate();
                    }
                }
                if ($request->filled('viality') && $request->input('viality') != 'none') {
                    $address->viality()->associate(Viality::where('name', $request->input('viality'))->first());
                }
                if ($request->filled('settlement_type') && $request->input('settlement_type') != 'none') {
                    $address->settlement_type()->associate(SettlementType::where('name', $request->input('settlement_type'))->first());
                }
                if ($request->filled('locality')  && $request->input('locality') != 'none') {
                    $locality = Locality::where('code', getDescriptionName($request->input('locality')))->first();
                    if ($locality) {
                        $address->locality()->associate($locality);
                    } else {
                        $locality = new Locality();
                        $locality->code = getDescriptionName($request->input('locality'));
                        $locality->description = $request->input('locality');
                        $locality->municipality()->associate(Municipality::where('id', $request->input('municipality'))->first());
                        if ($locality->save()) {
                            $address->locality()->associate($locality);
                        }
                    }
                }
                if ($request->filled('municipality') && $request->input('municipality') != 'none') {
                    $address->municipality()->associate(Municipality::where('id', $request->input('municipality'))->first());
                }
                if ($request->filled('state') && $request->input('state') != 'none') {
                    $address->state()->associate(State::where('code', $request->input('state'))->first());
                }
                $address->save();

                $ssn = $date->patient->ssn;
                if ($request->filled('number')) {
                    $ssn->number = $request->input('number');
                }
                if ($request->filled('ssn')) {
                    $ssn->ssn = strtoupper($request->input('ssn'));
                }
                if (SsnType::where('name', $request->input('ssn_type'))->first()) {
                    $ssn->ssn_type()->associate(SsnType::where('name', $request->input('ssn_type'))->first());
                } else {
                    $ssn->ssn_type()->associate(SsnType::where('name', 'ninguna')->first());
                }
                $ssn->save();

                $patient = $date->patient;
                $patient->name = ucfirst($request->input('name'));
                $patient->paternal_lastname = ucfirst($request->input('paternal_lastname'));
                $patient->maternal_lastname = ucfirst($request->input('maternal_lastname'));
                $patient->phone = $request->input('phone');
                if ($request->filled('curp')) {
                    $curp = strtoupper($request->input('curp'));
                    $patient->curp = $curp;
                    $yy = substr($request->input('curp'), 4, -12);
                    $mm = substr($request->input('curp'), 6, -10);
                    $dd = substr($request->input('curp'), 8, -8);
                    $patient->birthdate = Carbon::createFromFormat("d.m.y", "$dd.$mm.$yy");
                    $patient->sex = substr($request->input('curp'), 10, -7);
                    $patient->birthplace()->associate(State::where('code', strtoupper(substr($request->input('curp'), 11, -5)))->first());
                    $patient->ssn()->associate($ssn);
                }
                $patient->address()->associate($address);
                $patient->save();

                $date->diagnosis = $request->input('diagnosis');
                if($request->filled('status') && $request->has('status')) {
                    $date->status()->associate(Status::where('name', $request->input('status'))->first());
                } else {
                    $date->status()->associate(Status::where('name', 'pendiente')->first());
                }
                $date->user()->associate(auth()->user());
                $date->patient()->associate($patient);
                if($date->save()) {
                    return redirect()->route('dates.show', $date->uuid)->with('message-store', '¡Cita actualizada!');
                }
                return redirect()->back()->withInput()->withErrors(['error', 'Ocurrió un error, inténtelo nuevamente.']);
            }
        }
        return abort('404');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Date  $date
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, String $date)
    {
        $request->user()->authorizeRoles(['admin']);

        if (isValidUuid($date)) {
            $date = Date::where('uuid', $date)->first();
            if ($date) {
                $date->delete();
            }
        }

        return redirect()->route('dates.index')->with('message-destroy', 'Eliminado');
    }

    public function export()
    {
        $now = Carbon::now()->format('d-m-Y_g.i_A');
        return Excel::download(new DatesExport, "Citas_$now.xlsx");
    }

    public function fetch_zip_codes(Request $request)
    {
        $request->validate([
            'zip_code' => 'required|exists:zip_codes,code'
        ]);

        $zip_code = ZipCode::where('code', $request->input('zip_code'))->first();
        if ($zip_code) {
            $municipality = Municipality::where('id', $zip_code->municipality_id)->first();
            if ($municipality) {
                $state = State::where('id', $municipality->state_id)->first();
                if ($state) {
                    return response()->json([
                        "municipality" => $municipality,
                        "state" => $state
                    ]);
                }
            }
        }

        return response()->json();
    }
     public function fetch(Request $request)
    {
        $date = Date::where('id', $request->input('id'))->first();
        $data = [];
        Carbon::setLocale('es');
        // dd($patient);
        if ($date) {
            $data = [
                "folio" => str_pad($date->id, 8, '0', STR_PAD_LEFT),
                "status" => $date->getStatus(),
                "diagnosis" => ($date->diagnosis != "") ? $date->diagnosis : "<span class='text-muted'><i>N/A</i></span>",
                "attention_date" => Carbon::parse($date->attention_date)->format('d/m/Y g:i A'),
                "fullname" => $date->getPatient(),
                "curp" => $date->patient->curp,
                "birthdate" => $date->patient->birthdate,
                "sex_icon" => ($date->patient->sex === "H") ? '<i class="icon fas fa-mars"></i>' : '<i class="icon fas fa-venus"></i>',
                "sex" => ($date->patient->sex === "H") ? "Hombre" : "Mujer" ,
                "birthplace" => $date->patient->getBirthplace(),
                "phone" => $date->patient->phone,
                "ssn_type" => ($date->patient->ssn->ssn_type) ? $date->patient->ssn->ssn_type->description : "<span class='text-muted'><i>N/A</i></span>",
                "ssn" => ($date->patient->ssn->ssn != "") ? $date->patient->ssn->ssn : "<span class='text-muted'><i>N/A</i></span>",
                "number" => ($date->patient->ssn->number != "") ? $date->patient->ssn->number : "<span class='text-muted'><i>N/A</i></span>",
                "viality_type" => ($date->patient->address->viality) ? $date->patient->address->viality->description : "<span class='text-muted'><i>N/A</i></span>",
                "viality_name" => ($date->patient->address->street != "") ? $date->patient->address->street : "<span class='text-muted'><i>N/A</i></span>",
                "number_ext" => ($date->patient->address->number_ext != "") ? $date->patient->address->number_ext : "<span class='text-muted'><i>N/A</i></span>",
                "number_int" => ($date->patient->address->number_int != "") ? $date->patient->address->number_int : "<span class='text-muted'><i>N/A</i></span>",
                "settlement_type" => ($date->patient->address->settlement_type) ? $date->patient->address->settlement_type->description : "<span class='text-muted'><i>N/A</i></span>",
                "settlement_name" => ($date->patient->address->colony != "") ? $date->patient->address->colony : "<span class='text-muted'><i>N/A</i></span>",
                "zip_code" => ($date->patient->address->zip_code) ? $date->patient->address->zip_code->code : "<span class='text-muted'><i>N/A</i></span>",
                "locality" => ($date->patient->address->locality) ? $date->patient->address->locality->description : "<span class='text-muted'><i>N/A</i></span>",
                "municipality" => ($date->patient->address->municipality) ? $date->patient->address->municipality->description : "<span class='text-muted'><i>N/A</i></span>",
                "state" => ($date->patient->address->state) ? $date->patient->address->state->description : "<span class='text-muted'><i>N/A</i></span>"
            ];
        }

        return response()->json($data);
    }
}

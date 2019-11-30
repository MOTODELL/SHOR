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
        $request->user()->authorizeRoles(['admin', 'user']);

        $dates = Date::all();
        // dd($dates->first()->uuid);

        return view('dates.index', compact('dates'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $request->user()->authorizeRoles(['admin', 'user']);

        $patients = Patient::all();
        $vialities = Viality::all();
        $settlement_types = SettlementType::all();
        $localities = Locality::all();
        $municipalities = Municipality::all();
        $states = State::all();
        $ssn_types = SsnType::all();
        $today = Carbon::now()->format('d/m/Y');

        return view('dates.create', compact(['patients', 'vialities', 'settlement_types', 'localities', 'municipalities', 'states', 'ssn_types', 'today']));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->user()->authorizeRoles(['admin', 'user']);
        $patient = Patient::where('id', $request->input('id-exist'))->first();
        // dd($user);
        if (!$patient) {
            $address = new Address();
            $address->street = ucfirst($request->input('street'));
            $address->number_ext = $request->input('number_ext');
            if ($request->filled('number_int')) {
                $address->number_int = $request->input('number_int');
            }
            $address->colony = ucfirst($request->input('colony'));
            if ($request->filled('zip_code')) {
                $address->zip_code()->associate(ZipCode::where('code', $request->input('zip_code'))->first());
            }
            if ($request->filled('viality')) {
                $address->viality()->associate(Viality::where('name', $request->input('viality'))->first());
            }
            if ($request->filled('settlement_type')) {
                $address->settlement_type()->associate(SettlementType::where('name', $request->input('settlement_type'))->first());
            }
            if ($request->filled('locality')) {
                $address->locality()->associate(Locality::where('code', $request->input('locality'))->first());
            }
            if ($request->filled('municipality')) {
                $address->municipality()->associate(Municipality::where('id', $request->input('municipality'))->first());
            }
            if ($request->filled('state')) {
                $address->state()->associate(State::where('code', $request->input('state'))->first());
            }
            $address->save();
    
            $ssn = new Ssn();
            $ssn->number = $request->input('number');
            $ssn->ssn = strtoupper($request->input('ssn'));
            $ssn->ssn_type()->associate(SsnType::where('name', $request->input('ssn_type'))->first());
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
        $date->status()->associate(Status::where('name', 'pendiente')->first());
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
        $request->user()->authorizeRoles(['admin', 'user']);

        $date = Date::where('uuid', $date)->first();

        return view('dates.show', compact('date'));
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
        $request->user()->authorizeRoles(['admin', 'user']);
        
        $date = Date::withTrashed()->where('uuid', $date)->first();
        $vialities = Viality::all();
        $settlement_types = SettlementType::all();
        $localities = Locality::all();
        $municipalities = Municipality::all();
        $states = State::all();
        $ssn_types = SsnType::all();

        // dd($date->first()->patient->ssn->number);

        return view('dates.edit', compact(['date', 'vialities', 'settlement_types', 'localities', 'municipalities', 'states', 'ssn_types']));
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
        $request->user()->authorizeRoles(['admin', 'user']);

        $date = Date::where('uuid', $date)->first();

        $address = $date->patient->address;
        $address->street = ucfirst($request->input('street'));
        $address->number_ext = $request->input('number_ext');
        if ($request->filled('number_int')) {
            $address->number_int = $request->input('number_int');
        }
        $address->colony = ucfirst($request->input('colony'));
        if ($request->filled('zip_code')) {
            $address->zip_code()->associate(ZipCode::where('code', $request->input('zip_code'))->first());
        }
        if ($request->filled('viality')) {
            $address->viality()->associate(Viality::where('name', $request->input('viality'))->first());
        }
        if ($request->filled('settlement_type')) {
            $address->settlement_type()->associate(SettlementType::where('name', $request->input('settlement_type'))->first());
        }
        if ($request->filled('locality')) {
            $address->locality()->associate(Locality::where('code', $request->input('locality'))->first());
        }
        if ($request->filled('municipality')) {
            $address->municipality()->associate(Municipality::where('id', $request->input('municipality'))->first());
        }
        if ($request->filled('state')) {
            $address->state()->associate(State::where('code', $request->input('state'))->first());
        }
        $address->save();

        $ssn = $date->patient->ssn;
        $ssn->number = $request->input('number');
        $ssn->ssn = strtoupper($request->input('ssn'));
        $ssn->ssn_type()->associate(SsnType::where('name', $request->input('ssn_type'))->first());
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
        $date->status()->associate(Status::where('name', 'pendiente')->first());
        if($date->save()) {
            return redirect()->route('dates.show', $date->uuid)->with('message-update', '¡Cita actualizada!');
        }
        return redirect()->back()->withInput()->withErrors(['error', 'Ocurrió un error, inténtelo nuevamente.']);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Date  $date
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, Date $date)
    {
        $request->user()->authorizeRoles(['admin', 'user']);

        $date->delete();

        return redirect()->route('dates.index')->with('message-destroy', 'Eliminado');
    }

    public function export()
    {
        $now = Carbon::now()->format('d-M-Y_g.i_A');
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
}

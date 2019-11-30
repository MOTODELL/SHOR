<?php

namespace App\Http\Controllers;

use App\Ssn;
use App\State;
use App\SsnType;
use App\Address;
use App\Exports\PatientsExport;
use App\Patient;
use App\Viality;
use App\Locality;
use Carbon\Carbon;
use App\Municipality;
use App\SettlementType;
use App\ZipCode;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;

class PatientController extends Controller
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
        $request->user()->authorizeRoles('admin');

        $patients = Patient::all();

        return view('patients.index', compact('patients'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $request->user()->authorizeRoles('admin');

        $patients = Patient::all();
        $vialities = Viality::all();
        $settlement_types = SettlementType::all();
        $localities = Locality::all();
        $municipalities = Municipality::all();
        $states = State::all();
        $ssn_types = SsnType::all();

        return view('patients.create', compact([
            'patients', 
            'vialities', 
            'settlement_types', 
            'localities', 
            'municipalities', 
            'states', 
            'ssn_types'
        ]));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StorePatientRequest $request)
    {
        $request->user()->authorizeRoles('admin');
        // dd($request);
        $address = new Address();
        $address->street = ucfirst($request->input('street'));
        $address->number_ext = $request->input('number_ext');
        if ($request->filled('number_int')) {
            $address->number_int = $request->input('number_int');
        }
        $address->colony = ucfirst($request->input('colony'));
        // $address->zip_code = $request->input('zip_code');
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
            $patient->curp = strtoupper($request->input('curp'));
            $yy = substr($request->input('curp'), 4, -12);
            $mm = substr($request->input('curp'), 6, -10);
            $dd = substr($request->input('curp'), 8, -8);
            $patient->birthdate = Carbon::createFromFormat("d.m.y", "$dd.$mm.$yy");
            $patient->sex = substr($request->input('curp'), 10, -7);
            $patient->birthplace()->associate(State::where('code', strtoupper(substr($request->input('curp'), 11, -5)))->first());
            $patient->ssn()->associate($ssn);
        }
        $patient->address()->associate($address);
        if($patient->save()) {
            return redirect()->route('patients.index')->with('message-create', 'Creado');
        }
        return redirect()->back()->withInput()->withErrors(['error', 'Ocurrió un error, inténtelo nuevamente.']);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Patient  $patient
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request, Patient $patient)
    {
        $request->user()->authorizeRoles('admin');

        return view('patients.show', compact('patient'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Patient  $patient
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request, Patient $patient)
    {
        $request->user()->authorizeRoles('admin');
        $vialities = Viality::all();
        $settlement_types = SettlementType::all();
        $localities = Locality::all();
        $municipalities = Municipality::all();
        $states = State::all();
        $ssn_types = SsnType::all();

        return view('patients.edit', compact([
            'patient', 
            'vialities', 
            'settlement_types', 
            'localities', 
            'municipalities', 
            'states', 
            'ssn_types'
        ]));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Patient  $patient
     * @return \Illuminate\Http\Response
     */
    public function update(UpdatePatientRequest $request, Patient $patient)
    {
        $request->user()->authorizeRoles('admin');
        $address = $patient->address;
        $address->street = ucfirst($request->input('street'));
        $address->number_ext = $request->input('number_ext');
        if ($request->filled('number_int')) {
            $address->number_int = $request->input('number_int');
        }
        $address->colony = ucfirst($request->input('colony'));
        // $address->zip_code = $request->input('zip_code');
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

        $ssn = $patient->ssn;
        $ssn->number = $request->input('number');
        $ssn->ssn = strtoupper($request->input('ssn'));
        $ssn->ssn_type()->associate(SsnType::where('name', $request->input('ssn_type'))->first());
        $ssn->save();

        $patient->name = ucfirst($request->input('name'));
        $patient->paternal_lastname = ucfirst($request->input('paternal_lastname'));
        $patient->maternal_lastname = ucfirst($request->input('maternal_lastname'));
        $patient->phone = $request->input('phone');
        if ($request->filled('curp')) {
            $patient->curp = strtoupper($request->input('curp'));
            $yy = substr($request->input('curp'), 4, -12);
            $mm = substr($request->input('curp'), 6, -10);
            $dd = substr($request->input('curp'), 8, -8);
            $patient->birthdate = Carbon::createFromFormat("d.m.y", "$dd.$mm.$yy");
            $patient->sex = substr($request->input('curp'), 10, -7);
            $patient->birthplace()->associate(State::where('code', strtoupper(substr($request->input('curp'), 11, -5)))->first());
            $patient->ssn()->associate($ssn);
        }
        $patient->address()->associate($address);
        if($patient->save()) {
            return redirect()->route('patients.index')->with('message-update', 'Editado');
        }
        return redirect()->back()->withInput()->withErrors(['error', 'Ocurrió un error, inténtelo nuevamente.']);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Patient  $patient
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, Patient $patient)
    {
        $request->user()->authorizeRoles('admin');

        $patient->address()->delete();
        $patient->ssn()->delete();
        $patient->delete();

        return redirect()->route('patients.index')->with('message-destroy', 'Eliminado');
    }

    public function fetch(Request $request)
    {
        $patient = Patient::where('id', $request->input('id'))->first();
        $data = [];
        // dd($patient);
        if ($patient) {
            $data = [
                "fullname" => $patient->fullname,
                "curp" => $patient->curp,
                "birthdate" => $patient->birthdate,
                "sex_icon" => ($patient->sex === null || empty($patient->sex) || (($patient->sex != "H") && ($patient->sex == "M"))) ? "<span class='text-muted'><i>N/A</i></span>" : (($patient->sex === "H") ? '<i class="icon fas fa-mars"></i>' : '<i class="icon fas fa-venus"></i>' ),
                "sex" => ($patient->sex === null || empty($patient->sex) || (($patient->sex != "H") && ($patient->sex == "M"))) ? "<span class='text-muted'><i>N/A</i></span>" : (($patient->sex === "H") ? "Hombre" : "Mujer" ),
                "birthplace" => $patient->getBirthplace(),
                "phone" => $patient->phone,
                "ssn_type" => $patient->ssn->ssn_type->description,
                "ssn" => $patient->ssn->ssn,
                "number" => $patient->ssn->number,
                "viality_type" => $patient->address->viality->description,
                "viality_name" => $patient->address->street,
                "number_ext" => $patient->address->number_ext,
                "number_int" => $patient->address->number_int,
                "settlement_type" => $patient->address->settlement_type->description,
                "settlement_name" => $patient->address->colony,
                // "zip_code" => $patient->address->zip_code->id,
                "locality" => $patient->address->locality->description,
                "municipality" => $patient->address->municipality->description,
                "state" => $patient->address->state->description
            ];
        }

        return response()->json($data);
    }

    public function export()
    {
        $now = Carbon::now()->format('d-M-Y_g.i_A');
        return Excel::download(new PatientsExport, "Pacientes_$now.xlsx");
    }
}

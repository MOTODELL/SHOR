<?php

namespace App\Http\Controllers;

use App\Ssn;
use App\State;
use App\SsnType;
use App\Address;
use App\Patient;
use App\Viality;
use App\Locality;
use Carbon\Carbon;
use App\Municipality;
use App\SettlementType;
use Illuminate\Http\Request;

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

        return view('patients.create', compact(['patients', 'vialities', 'settlement_types', 'localities', 'municipalities', 'states', 'ssn_types']));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
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
        $address->zip_code = $request->input('zip_code');
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
            $address->municipality()->associate(Municipality::where('code', $request->input('municipality'))->first());
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

        return view('patients.edit', compact(['patient', 'vialities', 'settlement_types', 'localities', 'municipalities', 'states', 'ssn_types']));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Patient  $patient
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Patient $patient)
    {
        $request->user()->authorizeRoles('admin');
        $address = $patient->address();
        $address->street = ucfirst($request->input('street'));
        $address->number_ext = $request->input('number_ext');
        if ($request->filled('number_int')) {
            $address->number_int = $request->input('number_int');
        }
        $address->colony = $request->input('colony');
        $address->zip_code = $request->input('zip_code');
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
            $address->municipality()->associate(Municipality::where('code', $request->input('municipality'))->first());
        }
        if ($request->filled('state')) {
            $address->state()->associate(State::where('code', $request->input('state'))->first());
        }
        $address->save();

        $ssn = $patient->ssn();
        $ssn->ssn = $request->input('ssn');
        $ssn->number = strtoupper($request->input('ssn'));
        $ssn->kinship = $request->input('kinship');
        $ssn->date_start = $request->input('date_start');
        $ssn->date_end = $request->input('date_end');
        $ssn->ssn_type()->associate(SsnType::where('name', $request->input('ssn_type'))->first());
        $ssn->save();

        $patient->name = ucfirst($request->input('name'));
        $patient->paternal_lastname = ucfirst($request->input('paternal_lastname'));
        $patient->maternal_lastname = ucfirst($request->input('maternal_lastname'));
        $patient->curp = $request->input('curp');
        $patient->birthdate = $request->input('birthdate');
        $patient->sex = $request->input('sex');
        $patient->phone = $request->input('phone');
        $patient->birthplace()->associate(State::where('code', $request->input('birthplace'))->first());
        $patient->ssn()->associate($ssn);
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
}

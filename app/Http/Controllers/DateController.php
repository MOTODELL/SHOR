<?php

namespace App\Http\Controllers;

use App\Ssn;
use App\Date;
use App\State;
use App\Status;
use App\Patient;
use App\SsnType;
use App\Address;
use App\Viality;
use App\Locality;
use Carbon\Carbon;
use App\Municipality;
use App\SettlementType;
use Illuminate\Http\Request;
use App\Http\Requests\StoreDateRequest;

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

        return view('dates.create', compact(['patients', 'vialities', 'settlement_types', 'localities', 'municipalities', 'states', 'ssn_types']));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->user()->authorizeRoles(['admin', 'user']);
        // dd($request);
        if ($request->input('patient_id') == "") {
            $address = new Address();
            $address->street = $request->input('street');
            $address->number_ext = $request->input('number_ext');
            $address->number_int = $request->input('number_int');
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
                // $patient->birthdate = $yy.'-'.$mm.'-'.$dd;
                $patient->sex = substr($request->input('curp'), 10, -7);
                $patient->birthplace()->associate(State::where('code', substr($request->input('curp'), 11, -5))->first());
                $patient->ssn()->associate($ssn);
            }
            $patient->address()->associate($address);
            $patient->save();
        } else {
            $patient = $request->input('patient_id');
        }

        $date = new Date();
        $date->folio = $request->input('folio');
        $date->attention_date = Carbon::now();
        $date->diagnosis = $request->input('diagnosis');
        $date->status()->associate(Status::where('name', 'pendiente')->first());
        $date->user()->associate(auth()->user());
        $date->patient()->associate($patient);
        if($date->save()) {
            return redirect()->route('dates.index')->with('message-create', 'Creado');
        }
        return redirect()->back()->withInput()->withErrors(['error', 'Ocurrió un error, inténtelo nuevamente.']);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Date  $date
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request, Date $date)
    {
        $request->user()->authorizeRoles(['admin', 'user']);

        return view('dates.show', compact('date'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Date  $date
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request, Date $date)
    {
        $request->user()->authorizeRoles(['admin', 'user']);

        $patients = Patient::all();
        $vialities = Viality::all();
        $settlement_types = SettlementType::all();
        $localities = Locality::all();
        $municipalities = Municipality::all();
        $states = State::all();
        $ssn_types = SsnType::all();

        return view('dates.edit', compact(['date', 'patients', 'vialities', 'settlement_types', 'localities', 'municipalities', 'states', 'ssn_types']));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Date  $date
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Date $date)
    {
        $request->user()->authorizeRoles(['admin', 'user']);

        $address = $date->patient()->address();
        $address->street = $request->input('street');
        $address->number_ext = $request->input('number_ext');
        $address->number_int = $request->input('number_int');
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

        $ssn = $date->patient()->ssn();
        $ssn->ssn = $request->input('ssn');
        $ssn->number = $request->input('number');
        $ssn->kinship = $request->input('kinship');
        $ssn->date_start = $request->input('date_start');
        $ssn->date_end = $request->input('date_end');
        $ssn->ssn_type()->associate(SsnType::where('name', $request->input('ssn_type'))->first());
        $ssn->save();

        $patient = $ssn->patient();
        $patient->name = $request->input('name');
        $patient->paternal_lastname = $request->input('paternal_lastname');
        $patient->maternal_lastname = $request->input('maternal_lastname');
        $patient->curp = $request->input('curp');
        $patient->birthdate = $request->input('birthdate');
        $patient->sex = $request->input('sex');
        $patient->phone = $request->input('phone');
        $patient->birthplace()->associate(State::where('code', $request->input('birthplace'))->first());
        $patient->ssn()->associate($ssn);
        $patient->address()->associate($address);
        $patient->save();

        $date->folio = $request->input('folio');
        $date->attention_date = Carbon::now();
        $date->diagnosis = $request->input('diagnosis');
        $date->status()->associate(Status::where('name', 'pendiente')->first());
        $date->user()->associate(auth()->user());
        $date->patient()->associate($patient);
        if($date->save()) {
            return redirect()->route('dates.index')->with('message-create', 'Creado');
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
}

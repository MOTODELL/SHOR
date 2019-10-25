<?php

namespace App\Http\Controllers;

use App\State;
use App\Doctor;
use App\Address;
use App\Viality;
use App\Locality;
use App\Municipality;
use App\SettlementType;
use App\Http\Requests\StoreDoctorRequest;
use Illuminate\Http\Request;

class DoctorController extends Controller
{
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

        $doctors = Doctor::all();

        return view('doctors.index', compact('doctors'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $request->user()->authorizeRoles('admin');
        $vialities = Viality::all();
        $states = State::all();
        $municipalities = Municipality::all();
        $localities = Locality::all();
        $settlementTypes = SettlementType::all();
        return view('doctors.create', compact([
            'vialities', 
            'states', 
            'municipalities', 
            'localities', 
            'settlementTypes'
        ]));
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

        $address = new Address();
        $address->street = ucfirst($request->input('street'));
        $address->number_ext = $request->input('number_ext');
        if (filled('number_int')) {
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
        
        $doctor = new Doctor();
        $doctor->name = ucfirst($request->input('name'));
        $doctor->paternal_lastname = ucfirst($request->input('paternal_lastname'));
        $doctor->maternal_lastname = ucfirst($request->input('maternal_lastname'));
        $doctor->sex = $request->input('sex');
        $doctor->email = $request->input('email');
        $doctor->birthdate = $request->input('birthdate');
        $doctor->professional_id = $request->input('professional_id');
        $doctor->phone = $request->input('phone');
        $doctor->address()->associate($address);
    
        if ($doctor->save()) {
            return redirect()->route('doctors.index')->with('message-store', 'Creado');
        }
        return redirect()->back()->withInput()->withErrors(['error', 'Ocurrió un error, inténtelo nuevamente.']);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Doctor  $doctor
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request, Doctor $doctor)
    {
        $request->user()->authorizeRoles('admin');

        return view('doctors.show', compact('doctor'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Doctor  $doctor
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request, Doctor $doctor)
    {
        // dd($doctor->address->settlement_type->name);
        $request->user()->authorizeRoles('admin');
        $vialities = Viality::all();
        $states = State::all();
        $municipalities = Municipality::all();
        $localities = Locality::all();
        $settlementTypes = SettlementType::all();
        return view('doctors.edit', compact([
            'doctor',
            'vialities', 
            'states', 
            'municipalities', 
            'localities', 
            'settlementTypes'
        ]));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Doctor  $doctor
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Doctor $doctor)
    {
        $request->user()->authorizeRoles('admin');
        // dd($request);
        $address = $doctor->address;
        $address->street = ucfirst($request->input('street'));
        $address->number_ext = $request->input('number_ext');
        if (filled('number_int')) {
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
        
        $doctor->name = ucfirst($request->input('name'));
        $doctor->paternal_lastname = ucfirst($request->input('paternal_lastname'));
        $doctor->maternal_lastname = ucfirst($request->input('maternal_lastname'));
        $doctor->sex = $request->input('sex');
        $doctor->email = $request->input('email');
        $doctor->birthdate = $request->input('birthdate');
        $doctor->professional_id = $request->input('professional_id');
        $doctor->phone = $request->input('phone');
        $doctor->address()->associate($address);
    
        if ($doctor->save()) {
            return redirect()->route('doctors.index')->with('message-update', 'Editado');
        }
        return redirect()->back()->withInput()->withErrors(['error', 'Ocurrió un error, inténtelo nuevamente.']);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Doctor  $doctor
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, Doctor $doctor)
    {
        $request->user()->authorizeRoles('admin');

        $doctor->delete();

        return redirect()->route('doctors.index')->with('message-destroy', 'Eliminado');
    }
}

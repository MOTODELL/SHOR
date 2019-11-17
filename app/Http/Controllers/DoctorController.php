<?php

namespace App\Http\Controllers;

use App\Cause;
use App\Doctor;
use App\Status;
use App\Patient;
use App\Service;
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
        $causes = Cause::all();
        $status = Status::all();
        $services = Service::all();
        $patients = Patient::all();
        return view('doctors.create', compact([
            'patients',
            'services',
            'status',
            'causes'
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
        $request->user()->authorizeRoles('admin');
        $causes = Cause::all();
        $status = Status::all();
        $services = Service::all();
        $patients = Patient::all();
        return view('doctors.edit', compact([
            'patients', 
            'services',
            'status', 
            'causes'
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

<?php

namespace App\Http\Controllers;

use App\Date;
use App\Patient;
use App\Ssn;
use App\State;
use App\Status;
use Carbon\Carbon;
use Illuminate\Http\Request;

class DateController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        dd($this->middleware('auth'));
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function storeUrgency(Request $request)
    {
        $date = new Date();
        $patient = new Patient();
        $ssn = new Ssn();
        $birthplace = State::where('code', $request->input('birthplace_id'))->first();
        $state = State::where('code', $request->input('state_id'))->first();

        if ($birthplace && $state) {
            $ssn = Ssn::where('ssn', $request->input('ssn'))->first();
            if (!$ssn) {
                $ssn = new Ssn();
                $ssn->ssn = $request->input('ssn');
                $ssn->date_start = $request->input('date_start');
                $ssn->date_end = $request->input('date_end');
                $ssn->save();
            }
            
            $patient->relationship = $request->input('relationship');
            $patient->name = $request->input('name');
            $patient->lastname = $request->input('lastname');
            $patient->birthdate = $request->input('birthdate');
            $patient->sex = $request->input('sex');
            $patient->curp = $request->input('curp');
            $patient->street = $request->input('street');
            $patient->number = $request->input('number');
            $patient->colony = $request->input('colony');
            $patient->zip_code = $request->input('zip_code');
            if ($request->filled('titular')) {
                $patient->titular()->associate($request->input('titular'));
            }
            $patient->state()->associate($state);
            $patient->ssn()->associate($ssn);
            $patient->birthplace()->associate($birthplace);
            $patient->save();
            
            $date->folio = $request->input('folio');
            $date->attention_date = Carbon::now();
            $date->user()->associate(auth()->user());
            $date->patient()->associate($patient);
            $date->status()->associate(Status::where('name', 'pendiente')->first());
            $date->save();
        }
        dd('guardado');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function createUrgency(Request $request)
    {
        $request->user()->authorizeRoles(['admin', 'user']);

        $states = State::all();

        return view('dates.urgency', compact('states'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Date  $date
     * @return \Illuminate\Http\Response
     */
    public function show(Date $date)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Date  $date
     * @return \Illuminate\Http\Response
     */
    public function edit(Date $date)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Date  $date
     * @return \Illuminate\Http\Response
     */
    public function destroy(Date $date)
    {
        //
    }
}

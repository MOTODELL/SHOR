<?php

namespace App\Http\Controllers;

use App\User;
use App\Date;
use App\Patient;
use App\Municipality;
use Illuminate\Http\Request;

class HomeController extends Controller
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
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $users = User::all()->count();
        $dates = Date::all()->count();
        $patients = Patient::all()->count();
        // $users = User::all()->count();
        return view('home', compact(['users', 'dates', 'patients']));
    }

    public function test()
    {
        dd(Municipality::with('state')->whereHas('state', function ($q)
        {
            $q->where('municipalities.code', '001')
            ->where('states.code', 'BC');
        })->first());
    }
}

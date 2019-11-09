<?php

namespace App\Http\Controllers;

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
        return view('home');
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

<?php

namespace App\Http\Controllers;

use App\User;
use App\Date;
use App\Patient;
use Carbon\Carbon;
use App\Municipality;
use App\Charts\DateChart;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

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
<<<<<<< HEAD
=======
        $users = User::all()->count();
        $totalDates = Date::all()->count();
        $patients = Patient::all()->count();
>>>>>>> 2eb5085af9e050af96e3dc74bc17a2e21d3b13cf
        // $users = User::all()->count();
        $today = Carbon::now();
        $lastWeek = Carbon::today();
        $lastWeek = $lastWeek->subWeek('1');
        $dates = Date::select(DB::raw('DATE(attention_date) as date'))->whereBetween('attention_date', [$lastWeek, $today])->get()->groupBy('date');
        $dates = $dates->mapWithKeys(function ($value, $key){
            $key = Carbon::parse($key)->format('d/m/Y') . " (" . ucfirst(Carbon::parse($key)->dayName) . ")";
            return [$key => $value->count()];
        });
        // dd($dates->values()->toArray());
        $dateChart = new DateChart;
        $dateChart->labels($dates->keys()->toArray());
        $dateChart->dataset('Citas', 'line', $dates->values()->toArray());
<<<<<<< HEAD
        $dateChart->label('Cantidad');
        $users = User::all()->count();
        $dates = Date::all()->count();
        $patients = Patient::all()->count();
        return view('home', compact(['users', 'dates', 'patients', 'dateChart']));
=======
        return view('home', compact(['users', 'totalDates', 'patients', 'dateChart']));
>>>>>>> 2eb5085af9e050af96e3dc74bc17a2e21d3b13cf
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

<?php

namespace App\Http\Controllers;

use App\User;
use App\Date;
use App\Cause;
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
    public function index(Request $request)
    {
        $request->user()->authorizeRoles(['admin', 'analisis']);
        // $users = User::all()->count();
        $today = Carbon::now();
        $lastWeek = Carbon::today();
        $lastWeek = $lastWeek->subWeek('1');
        $totalDatesOfWeek = 0;
        $dates = Date::select(DB::raw('DATE(attention_date) as date'))->whereBetween('attention_date', [$lastWeek, $today])->get()->groupBy('date');
        $dates = $dates->mapWithKeys(function ($value, $key) use(&$totalDatesOfWeek){
            $key = Carbon::parse($key)->format('d/m/Y') . " (" . ucfirst(Carbon::parse($key)->dayName) . ")";
            $totalDatesOfWeek += $value->count();
            return [$key => $value->count()];
        });
        // dd($dates->values()->toArray());
        $dateChart = new DateChart;
        $dateChart->labels($dates->keys()->toArray());
        $dateChart->dataset('Citas', 'line', $dates->values()->toArray());
        $dateChart->label('Cantidad');
        $dateChart->title('Total de citas esta semana: ' . $totalDatesOfWeek);
        $users = User::all()->count();
        $totalDates = Date::all()->count();
        $patients = Patient::all()->count();
        return view('home', compact(['users', 'totalDates', 'patients', 'dateChart']));
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

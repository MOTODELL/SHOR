<?php

namespace App\Http\Controllers;

use App\Cause;
use App\Exports\CausesExport;
use App\Http\Requests\StoreCauseRequest;
use App\Http\Requests\UpdateCauseRequest;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;

class CauseController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
        $this->authorizeResource(Cause::class, 'cause');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        // $request->user()->authorizeRoles('admin');

        $causes = Cause::all();

        return view('causes.index', compact('causes'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        // $request->user()->authorizeRoles('admin');

        return view('causes.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreCauseRequest $request)
    {
        // $request->user()->authorizeRoles('admin');

        $cause = new Cause();
        $cause->code = $request->input('code');
        $cause->description = ucfirst($request->input('description'));
        if ($cause->save()) {
            return redirect()->route('causes.index')->with('message-store', 'Creado');
        }
        return redirect()->back()->withInput()->withErrors(['error', 'Ocurrió un error, inténtelo nuevamente.']);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Cause  $cause
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request, Cause $cause)
    {
        // $request->user()->authorizeRoles('admin');

        return view('causes.show', compact('cause'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Cause  $cause
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request, Cause $cause)
    {
        // $request->user()->authorizeRoles('admin');

        return view('causes.edit', compact('cause'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Cause  $cause
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateCauseRequest $request, Cause $cause)
    {
        // $request->user()->authorizeRoles('admin');

        $cause->code = $request->input('code');
        $cause->description = ucfirst($request->input('description'));
        if ($cause->save()) {
            return redirect()->route('causes.index')->with('message-update', 'Editado');
        }
        return redirect()->back()->withInput()->withErrors(['error', 'Ocurrió un error, inténtelo nuevamente.']);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Cause  $cause
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, Cause $cause)
    {
        // $request->user()->authorizeRoles('admin');

        $cause->delete();

        return redirect()->route('causes.index')->with('message-destroy', 'Eliminado');
    }

    public function export()
    {
        $now = Carbon::now()->format('d-m-Y_g.i_A');
        return Excel::download(new CausesExport, "Causes_$now.xlsx");
    }
}

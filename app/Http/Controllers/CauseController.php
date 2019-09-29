<?php

namespace App\Http\Controllers;

use App\Cause;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class CauseController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $causes = Cause::all();
        return view('causes.index', compact('causes'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('causes.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $cause = new Cause();
        $cause->code = $request->input('code');
        $cause->description = $request->input('description');
        $cause->save();
        return redirect()->route('causes.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Cause  $cause
     * @return \Illuminate\Http\Response
     */
    public function show(Cause $cause)
    {
        return view('causes.show', compact('cause'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Cause  $cause
     * @return \Illuminate\Http\Response
     */
    public function edit(Cause $cause)
    {
        return view('causes.edit', compact('cause'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Cause  $cause
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Cause $cause)
    {
        $cause->code = $request->input('code');
        $cause->description = $request->input('description');
        if ($cause->save()) {
            return redirect()->route('causes.index');
        }
        return Redirect::back()->withErrors(['message', 'No fue posible actualizar, intente nuevamente.']);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Cause  $cause
     * @return \Illuminate\Http\Response
     */
    public function destroy(Cause $cause)
    {
        $cause->delete();
        return redirect()->route('causes.index')->with('message-destroy', 'Eliminado');
    }
}

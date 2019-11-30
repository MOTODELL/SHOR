<?php

namespace App\Http\Controllers;

use App\Dependency;
use App\Exports\DependenciesExport;
use App\Http\Requests\StoreDependencyRequest;
use App\Http\Requests\UpdateDependencyRequest;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;

use function App\Http\getDescriptionName;

class DependencyController extends Controller
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
        $request->user()->authorizeRoles('admin');

        $dependencies = Dependency::all();

        return view('dependencies.index', compact(['dependencies']));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $request->user()->authorizeRoles('admin');

        return view('dependencies.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreDependencyRequest $request)
    {
        $request->user()->authorizeRoles('admin');

        
        $dependency = new Dependency();
        $dependency->name = getDescriptionName($request->input('description'));
        $dependency->description = ucfirst($request->input('description'));
        if ($dependency->save()) {
            return redirect()->route('dependencies.index')->with('message-store', 'Creado');
        }
        return redirect()->back()->withInput()->withErrors(['error', 'Ocurrió un error, inténtelo nuevamente.']);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Dependency  $dependency
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request, Dependency $dependency)
    {
        $request->user()->authorizeRoles('admin');

        return view('dependencies.show', compact('dependency'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Dependency  $dependency
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request, Dependency $dependency)
    {
        $request->user()->authorizeRoles('admin');

        return view('dependencies.edit', compact('dependency'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Dependency  $dependency
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateDependencyRequest $request, Dependency $dependency)
    {
        $request->user()->authorizeRoles('admin');

        $dependency->name = getDescriptionName($request->input('description'));
        $dependency->description = ucfirst($request->input('description'));
        if ($dependency->save()) {
            return redirect()->route('dependencies.index')->with('message-update', 'Editado');
        }
        return redirect()->back()->withInput()->withErrors(['error', 'Ocurrió un error, inténtelo nuevamente.']);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Dependency  $dependency
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, Dependency $dependency)
    {
        $request->user()->authorizeRoles('admin');

        $dependency->delete();

        return redirect()->route('dependencies.index')->with('message', 'Dependencia eliminada correctamente');
    }

    public function export()
    {
        $now = Carbon::now()->format('d-M-Y_g.i_A');
        return Excel::download(new DependenciesExport, "Servicios_$now.xlsx");
    }
}

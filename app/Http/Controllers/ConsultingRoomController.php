<?php

namespace App\Http\Controllers;

use App\ConsultingRoom;
use App\Http\Requests\StoreConsultingRoomRequest;
use App\Http\Requests\UpdateConsultingRoomRequest;
use Illuminate\Http\Request;

use function App\Http\getDescriptionName;

class ConsultingRoomController extends Controller
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

        $consultingRooms = ConsultingRoom::all();

        return view('consulting-rooms.index', compact('consultingRooms'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $request->user()->authorizeRoles('admin');

        return view('consulting-rooms.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreConsultingRoomRequest $request)
    {
        $consultingRoom = new ConsultingRoom();
        $consultingRoom->name = getDescriptionName($request->input('description'));
        $consultingRoom->description = $request->input('description');
        $consultingRoom->shift = $request->input('shift');

        if ($consultingRoom->save()) {
            return redirect()->route('consulting-rooms.index')->with('message-store', 'Creado');
        }
        return redirect()->back()->withInput()->withErrors(['error', 'Ocurrió un error, inténtelo nuevamente.']);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\ConsultingRoom  $consultingRoom
     * @return \Illuminate\Http\Response
     */
    public function show(ConsultingRoom $consultingRoom, Request $request)
    {
        $request->user()->authorizeRoles('admin');

        return view('consulting-rooms.show', compact('consultingRoom'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\ConsultingRoom  $consultingRoom
     * @return \Illuminate\Http\Response
     */
    public function edit(ConsultingRoom $consultingRoom, Request $request)
    {
        $request->user()->authorizeRoles('admin');

        return view('consulting-rooms.edit', compact('consultingRoom'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\ConsultingRoom  $consultingRoom
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateConsultingRoomRequest $request, ConsultingRoom $consultingRoom)
    {
        $request->user()->authorizeRoles('admin');

        $consultingRoom->name = getDescriptionName($request->input('description'));
        $consultingRoom->description = $request->input('description');
        $consultingRoom->shift = $request->input('shift');

        if ($consultingRoom->save()) {
            return redirect()->route('consulting-rooms.index')->with('message-update', 'Creado');
        }
        return redirect()->back()->withInput()->withErrors(['error', 'Ocurrió un error, inténtelo nuevamente.']);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\ConsultingRoom  $consultingRoom
     * @return \Illuminate\Http\Response
     */
    public function destroy(ConsultingRoom $consultingRoom, Request $request)
    {
        $request->user()->authorizeRoles('admin');

        $consultingRoom->delete();

        return redirect()->route('causes.index')->with('message-destroy', 'Eliminado');
    }
}

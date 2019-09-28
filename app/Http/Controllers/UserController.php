<?php

namespace App\Http\Controllers;

use App\Dependency;
use App\Role;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
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
     * Display a listing of the users.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $request->user()->authorizeRoles('admin');
        $users = User::all();
        return view('users.index', compact(['users']));
    }

    /**
     * Show the form for creating a new user.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $request->user()->authorizeRoles('admin');
        
        return view('users.create');
    }

    /**
     * Store a newly created user in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->user()->authorizeRoles('admin');

        // $dependency = Dependency::where('name', $request->input('dependency'))->firstOrFail();
        $dependency = '1';
        $user = new User();
        $user->username = $request->input('username');
        $user->name = $request->input('name');
        $user->avatar = 'https://api.adorable.io/avatars/285/'.$request->input('name');
        $user->lastname = $request->input('lastname');
        $user->email = $request->input('email');
        $user->password = Hash::make($request->input('password'));
        $user->dependency()->associate($dependency);
        if ($user->save()) {
            // $user->roles()->attach(Role::where('name', $request->input('roles')->first()));
            return redirect()->route('users.index')->with('message', 'Usuario creado correctamente');
        }
        return Redirect::back()->withErrors(['error', 'Ocurrió un error, inténtelo nuevamente.']);
    }

    /**
     * Display the specified user.
     *
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request, User $user)
    {
        $request->user()->authorizeRoles('admin');
        return view('users.show', compact('user'));
    }

    /**
     * Show the form for editing the specified user.
     *
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request, User $user)
    {
        $request->user()->authorizeRoles('admin');

        return view('users.edit', compact('user'));
    }

    /**
     * Update the specified user in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, User $user)
    {
        $request->user()->authorizeRoles('admin');

        // $dependency = Dependency::where('name', $request->input('dependency'))->firstOrFail();
        $dependency = '1';
        $user->name = $request->input('name');
        $user->lastname = $request->input('lastname');
        $user->email = $request->input('email');
        $user->password = Hash::make($request->input('password'));
        $user->dependency()->associate($dependency);
        if ($user->save()) {
            // $user->roles()->attach(Role::where('name', $request->input('roles')->first()));
            return redirect()->route('users.index')->with('message', 'Usuario actualizado correctamente');
        }
        return Redirect::back()->withErrors(['error', 'No fue posible actualizar, intente nuevamente.']);
    }

    /**
     * Remove the specified user from storage.
     *
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, User $user)
    {
        $request->user()->authorizeRoles('admin');
        $user->delete();
        return redirect()->route('users.index')->with('message', 'Usuario eliminado correctamente');
    }
}

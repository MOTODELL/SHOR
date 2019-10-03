<?php

namespace App\Http\Controllers;

use App\Dependency;
use App\Http\Requests\StoreUserRequest;
use App\Http\Requests\UpdateUserRequest;
use App\Role;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Redirect;

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
        $dependencies = Dependency::all();
        $roles = Role::all();
        return view('users.index', compact(['users', 'dependencies', 'roles']));
    }

    /**
     * Show the form for creating a new user.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $request->user()->authorizeRoles('admin');

        $dependencies = Dependency::all();
        $roles = Role::all();
        return view('users.create', compact(['dependencies', 'roles']));
    }

    /**
     * Store a newly created user in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreUserRequest $request)
    {
        $request->user()->authorizeRoles('admin');

        $user = new User();
        if ($request->input('password') == $request->input('password_confirmation')) {
            $user->password = Hash::make($request->input('password'));
        } else {
            return redirect()->back()->withInput()->withErrors(['error', 'Las contraseñas no coinciden.']);
        }
        $user->username = $request->input('username');
        $user->name = $request->input('name');
        $user->avatar = 'https://api.adorable.io/avatars/285/'.$request->input('name');
        $user->lastname = $request->input('lastname');
        $user->email = $request->input('email');
        if ($request->input('role') != 'admin') {
            $dependency = Dependency::where('name', $request->input('dependency'))->first();
            $user->dependency()->associate($dependency);
        }
        if ($user->save()) {
            $user->roles()->attach(Role::where('name', $request->input('role'))->first());
            return redirect()->route('users.index')->with('message-store', 'Creado');
        }
        return redirect()->back()->withInput()->withErrors(['error', 'Ocurrió un error, inténtelo nuevamente.']);
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

        $dependencies = Dependency::all();
        $roles = Role::all();
        return view('users.edit', compact(['user', 'dependencies', 'roles']));
    }

    /**
     * Update the specified user in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateUserRequest $request, User $user)
    {
        $request->user()->authorizeRoles('admin');

        if ($request->has('password')) {
            if ($request->input('password') == $request->input('password_confirmation')) {
                $user->password = Hash::make($request->input('password'));
            } else {
                return redirect()->back()->withInput()->withErrors(['error', 'Las contraseñas no coinciden.']);
            }
        }
        $user->username = $request->input('username');
        $user->name = $request->input('name');
        $user->avatar = 'https://api.adorable.io/avatars/285/'.$request->input('name');
        $user->lastname = $request->input('lastname');
        $user->email = $request->input('email');
        if ($request->input('role') != 'admin') {
            $dependency = Dependency::where('name', $request->input('dependency'))->first();
            $user->dependency()->associate($dependency);
        } else {
            $user->dependency()->delete();
        }
        if ($user->save()) {
            $user->roles()->attach(Role::where('name', $request->input('role'))->first());
            return redirect()->route('users.index')->with('message-update', 'Creado');
        }
        return redirect()->back()->withInput()->withErrors(['error', 'Ocurrió un error, inténtelo nuevamente.']);
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
        return redirect()->route('users.index')->with('message-destroy', 'Eliminado');
    }
}

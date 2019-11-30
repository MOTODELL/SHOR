<?php

namespace App\Http\Controllers;

use App\Role;
use App\User;
use App\State;
use Carbon\Carbon;
use App\Dependency;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Http\Requests\StoreUserRequest;
use App\Http\Requests\UpdateUserRequest;
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
        $roles = Role::all()->sortBy('description');
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
        $user->name = ucfirst($request->input('name'));
        $user->avatar = 'https://api.adorable.io/avatars/285/'.$request->input('name');
        $user->paternal_lastname = ucfirst($request->input('paternal_lastname'));
        $user->maternal_lastname = ucfirst($request->input('maternal_lastname'));
        if ($request->filled('professional_id')) {
            $user->professional_id = $request->input('professional_id');
        }
        if ($request->filled('curp')) {
            $user->curp = strtoupper($request->input('curp'));
            $yy = substr($request->input('curp'), 4, -12);
            $mm = substr($request->input('curp'), 6, -10);
            $dd = substr($request->input('curp'), 8, -8);
            $user->birthdate = Carbon::createFromFormat("d.m.y", "$dd.$mm.$yy");
            $user->sex = substr($request->input('curp'), 10, -7);
            $user->birthplace()->associate(State::where('code', strtoupper(substr($request->input('curp'), 11, -5)))->first());
        }
        $user->phone = $request->input('phone');
        $user->email = $request->input('email');
        if ($request->input('role') == 'user') {
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
        $user->name = ucfirst($request->input('name'));
        $user->avatar = 'https://api.adorable.io/avatars/285/'.$request->input('name');
        $user->paternal_lastname = ucfirst($request->input('paternal_lastname'));
        $user->maternal_lastname = ucfirst($request->input('maternal_lastname'));
        if ($request->filled('professional_id')) {
            $user->professional_id = $request->input('professional_id');
        }
        if ($request->filled('curp')) {
            $user->curp = strtoupper($request->input('curp'));
            $yy = substr($request->input('curp'), 4, -12);
            $mm = substr($request->input('curp'), 6, -10);
            $dd = substr($request->input('curp'), 8, -8);
            $user->birthdate = Carbon::createFromFormat("d.m.y", "$dd.$mm.$yy");
            $user->sex = substr($request->input('curp'), 10, -7);
            $user->birthplace()->associate(State::where('code', strtoupper(substr($request->input('curp'), 11, -5)))->first());
        }
        $user->phone = $request->input('phone');
        $user->email = $request->input('email');
        if ($request->input('role') != 'admin') {
            $dependency = Dependency::where('name', $request->input('dependency'))->first();
            $user->dependency()->associate($dependency);
        } else {
            $user->dependency()->delete();
        }
        if ($user->save()) {
            $user->roles()->sync(Role::where('name', $request->input('role'))->first());
            return redirect()->route('users.index')->with('message-update', 'Editado');
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

    public function fetchUser(Request $request)
    {
        $user = User::where('id', $request->input('id'))->first();
        $data = [];
        // dd($user);
        if ($user) {
            $data = [
                "fullname" => $user->fullname,
                "curp" => $user->curp,
                "birthdate" => $user->birthdate,
                "sex_icon" => ($user->sex === null || empty($user->sex) || (($user->sex != "H") && ($user->sex == "M"))) ? "<span class='text-muted'><i>N/A</i></span>" : (($user->sex === "H") ? '<i class="icon fas fa-mars"></i>' : '<i class="icon fas fa-venus"></i>' ),
                "sex" => ($user->sex === null || empty($user->sex) || (($user->sex != "H") && ($user->sex == "M"))) ? "<span class='text-muted'><i>N/A</i></span>" : (($user->sex === "H") ? "Hombre" : "Mujer" ),
                "birthplace" => $user->getBirthplace(),
                "phone" => $user->phone,
                "email" => $user->email
            ];
        }

        return response()->json($data);
    }
}

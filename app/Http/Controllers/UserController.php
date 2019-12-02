<?php

namespace App\Http\Controllers;

use App\Role;
use App\User;
use App\State;
use Carbon\Carbon;
use App\Dependency;
use App\Exports\UsersExport;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\StoreUserRequest;
use App\Http\Requests\UpdateUserRequest;
use Illuminate\Support\Facades\Redirect;
use Maatwebsite\Excel\Facades\Excel;

use function App\Http\isValidUuid;

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
        // $this->authorizeResource(User::class, 'users');
    }
    
    /**
     * Display a listing of the users.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        // $request->user()->authorizeRoles('admin');
        $this->authorize('view', User::class);

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
        // $request->user()->authorizeRoles('admin');
        $this->authorize('create', User::class);
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
        // $request->user()->authorizeRoles('admin');
        $this->authorize('create', User::class);
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
        if ($request->input('role') == 'user' || $request->input('role') == 'analist') {
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
    public function show(Request $request, $user)
    {
        // $request->user()->authorizeRoles('admin');
        
        if (isValidUuid($user)) {
            $user = User::where('id', $user)->first();
    
            if ($user) {
                $this->authorize('viewAny', $user);
                return view('users.show', compact('user'));
            }
        }
        abort('404');
    }

    /**
     * Show the form for editing the specified user.
     *
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request, $user)
    {
        // $request->user()->authorizeRoles('admin');
        if (isValidUuid($user)) {
            $user = User::where('id', $user)->first();
            $dependencies = Dependency::all();
            $roles = Role::all();
    
            if ($user) {
                $this->authorize('update', $user);
                return view('users.edit', compact(['user', 'dependencies', 'roles']));
            }
        }
        abort('404');
    }

    /**
     * Update the specified user in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateUserRequest $request, $user)
    {
        // $request->user()->authorizeRoles('admin');
        // dd($request);
        if (isValidUuid($user)) {
            $user = User::where('id', $user)->first();
    
            if ($user) {
                $this->authorize('update', $user);
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
                if ($request->filled('role')) {
                    if ($request->input('role') != 'admin') {
                    $dependency = Dependency::where('name', $request->input('dependency'))->first();
                    $user->dependency()->associate($dependency);
                    } else {
                        $user->dependency()->delete();
                    }
                }
                if ($user->save()) {
                    $user->roles()->sync(Role::where('name', $request->input('role'))->first());
                    return redirect()->route('users.index')->with('message-update', 'Editado');
                }
            }
        }
        return redirect()->back()->withInput()->withErrors(['error', 'Ocurrió un error, inténtelo nuevamente.']);
    }

    /**
     * Remove the specified user from storage.
     *
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, $user)
    {
        // $request->user()->authorizeRoles('admin');
        if (isValidUuid($user)) {
            $user = User::where('id', $user)->first();
    
            if ($user) {
                $this->authorize('delete', $user);
                $user->delete();
                return redirect()->route('users.index')->with('message-destroy', 'Eliminado');
            }
        }
        return redirect()->back()->withInput()->withErrors(['error', 'Ocurrió un error, inténtelo nuevamente.']);
    }

    public function fetch(Request $request)
    {
        $user = User::where('id', $request->input('id'))->first();
        $data = [];
        // dd($user);
        if ($user) {
            $data = [
                "fullname" => $user->fullname,
                "curp" => $user->curp,
                "birthdate" => ($user->birthdate && $user->birthdate != "") ? $user->birthdate : "<span class='text-muted'><i>N/A</i></span>",
                "sex_icon" => ($user->sex === null || empty($user->sex) || (($user->sex != "H") && ($user->sex == "M"))) ? "<span class='text-muted'><i>N/A</i></span>" : (($user->sex === "H") ? '<i class="icon fas fa-mars"></i>' : '<i class="icon fas fa-venus"></i>' ),
                "sex" => ($user->sex === null || empty($user->sex) || (($user->sex != "H") && ($user->sex == "M"))) ? "<span class='text-muted'><i>N/A</i></span>" : (($user->sex === "H") ? "Hombre" : "Mujer" ),
                "birthplace" => ($user->getBirthplace() && $user->getBirthplace() != "") ? $user->getBirthplace() : "<span class='text-muted'><i>N/A</i></span>",
                "phone" => ($user->phone && $user->phone != "") ? $user->phone : "<span class='text-muted'><i>N/A</i></span>",
                "email" => ($user->email && $user->email != "") ? $user->email : "<span class='text-muted'><i>N/A</i></span>"
            ];
        }

        return response()->json($data);
    }

    public function export()
    {
        $now = Carbon::now()->format('d-m-Y_g.i_A');
        return Excel::download(new UsersExport, "Usuarios_$now.xlsx");
    }
}

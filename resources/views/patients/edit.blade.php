@extends('layouts.app')

@section('header')
    <h2 class="page-head-title">Usuarios</h2>
    <nav aria-label="breadcrumb" role="navigation">
        <ol class="breadcrumb page-head-nav">
            <li class="breadcrumb-item">
                <a href="{{ route('users.index') }}"><span class="text-primary">Usuarios</span></a>
            </li>
            <li class="breadcrumb-item active">Editar Usuario</li>
        </ol>
    </nav>
@endsection

@section('content')
    <div class="card card-border-color card-border-color-primary">
        <div class="card-header">
            <div class="text-center">
                <legend>Editar Usuario</legend>
            </div>
        </div>
        <div class="card-body">
            <form method="POST" action="{{ route('users.update', $user) }}">
				@csrf
				@method('PUT')
                <div class="form-row mt-4">
                    <div class="form-group col-sm-12 col-md-6 col-lg-4">
                        <label for="name">{{ __('Nombre(s)') }}</label>
                        <input id="name" type="text" class="form-control form-control-lg @error('name') is-invalid @enderror" placeholder="Nombre" name="name" value="{{ $user->name }}" required autocomplete="name">
                        @error('name')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <div class="form-group col-sm-12 col-md-6 col-lg-4">
                        <label for="lastname">{{ __('Apellido(s)') }}</label>
                        <input id="lastname" type="text" class="form-control form-control-lg @error('lastname') is-invalid @enderror" placeholder="Apellido" name="lastname" value="{{ $user->lastname }}" required autocomplete="lastname">
                        @error('lastname')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <div class="form-group col-sm-12 col-md-6 col-lg-4">
                        <label for="email">{{ __('Correo electronico') }}</label>
                        <input id="email" type="email" class="form-control form-control-lg @error('email') is-invalid @enderror" name="email" value="{{ $user->email }}" required autocomplete="email" placeholder="ejemplo@correo.com">
                        @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    @if (auth()->user()->hasRole('admin'))
                    <div class="form-group col-sm-12 col-md-6 col-lg-4">
                        <label for="role">{{ __('Tipo de usuario') }}</label>
                        <select name="role" id="role" class="form-control form-control-lg custom-select select2" style="width: 100%">
                            @foreach ($roles as $role)
                                @if ($user->role == $role->name)
                                    <option value="{{ $role->name }}" selected>{{ $role->description }}</option>
                                @else
                                    <option value="{{ $role->name }}">{{ $role->description }}</option>
                                @endif
                            @endforeach
                        </select>
                    </div>
                    <div id="selectDependency" class="form-group col-sm-12 col-md-6 col-lg-4">
                        <label for="dependency">{{ __('Dependencia a la que pertenece') }}</label>
                        <select name="dependency" id="dependency" class="form-control form-control-lg custom-select select2" style="width: 100%">
                            @foreach ($dependencies as $dependency)
                                @if ($user->getDependency() == $dependency->name) --}}
                                    <option value="{{ $dependency->name }}" selected>{{ $dependency->name }}</option>
                                @else
                                    <option value="{{ $dependency->name }}">{{ $dependency->name }}</option>
                                @endif
                            @endforeach
                        </select>
                    </div>
                    @else
                    @endif
                    <div class="form-group col-sm-12 col-md-6 col-lg-4">
                        <label for="username">{{ __('Nombre de usuario') }}</label>
                        <input id="username" type="text" class="form-control form-control-lg @error('username') is-invalid @enderror" name="username" value="{{ $user->username }}" required autocomplete="username" placeholder="example123">
                        @error('username')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <div class="form-group col-sm-12 col-md-6 col-lg-4">
                        <label for="password">{{ __('Contraseña') }}</label>
                        <input id="password" type="password" class="form-control form-control-lg @error('password') is-invalid @enderror" name="password" placeholder="********">
                        @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <div class="form-group col-sm-12 col-md-6 col-lg-4">
                        <label for="password-confirm">{{ __('Confirmación de contraseña') }}</label>
                        <input id="password-confirm" type="password" class="form-control form-control-lg" name="password_confirmation" placeholder="********">
                    </div>
                    <div class="col-md-12 d-flex justify-content-center mt-2">
                        <a  href="{{ route('users.index') }}" class="btn btn-secondary pt-1 mr-5">
                            <i class="zmdi zmdi-long-arrow-return zmdi-hc-lg pr-1"></i>
                            <span class="h4 my-0">Regresar</span>
                        </a>
                        <button type="submit" class="btn btn-primary pt-1 mr-5">
                            <i class="zmdi zmdi-floppy zmdi-hc-lg pr-1"></i>
                            <span class="h4 my-0">Guardar</span>
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection
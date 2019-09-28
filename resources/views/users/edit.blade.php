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
                        <label for="name"><span class="text-danger pr-1">*</span>{{ __('Nombre(s)') }}</label>
                        <input id="name" type="text" class="form-control form-control-lg @error('name') is-invalid @enderror" placeholder="Nombre" name="name" value="{{ $user->name }}" required autocomplete="name" autofocus>
                        @error('name')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <div class="form-group col-sm-12 col-md-6 col-lg-4">
                        <label for="lastname"><span class="text-danger pr-1">*</span>{{ __('Apellido(s)') }}</label>
                        <input id="lastname" type="text" class="form-control form-control-lg @error('lastname') is-invalid @enderror" placeholder="Apellido" name="lastname" value="{{ $user->lastname }}" required autocomplete="lastname">
                        @error('lastname')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <div class="form-group col-sm-12 col-md-6 col-lg-4">
                        <label for="email"><span class="text-danger pr-1">*</span>{{ __('Correo electronico') }}</label>
                        <input id="email" type="email" class="form-control form-control-lg @error('email') is-invalid @enderror" name="email" value="{{ $user->email }}" required autocomplete="email" placeholder="ejemplo@correo.com">
                        @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <div class="form-group col-sm-12 col-md-6 col-lg-4">
                        <label for="username"><span class="text-danger pr-1">*</span>{{ __('Nombre de usuario') }}</label>
                        <input id="username" type="text" class="form-control form-control-lg @error('username') is-invalid @enderror" name="username" value="{{ $user->username }}" required autocomplete="username" placeholder="example123">
                        @error('username')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <div class="form-group col-sm-12 col-md-6 col-lg-4">
                        <label for="password"><span class="text-danger pr-1">*</span>{{ __('Contraseña') }}</label>
                        <input id="password" type="password" class="form-control form-control-lg @error('password') is-invalid @enderror" name="password" required placeholder="********">
                        @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <div class="form-group col-sm-12 col-md-6 col-lg-4">
                        <label for="password-confirm"><span class="text-danger pr-1">*</span>{{ __('Confirmación de contraseña') }}</label>
                        <input id="password-confirm" type="password" class="form-control form-control-lg" name="password_confirmation" required placeholder="********">
                    </div>
                    <div class="col-md-12 d-flex justify-content-center mt-2">
                        <a  href="{{ route('users.index') }}" class="btn btn-secondary mr-5"><i class="mdi mdi-keyboard-return mdi-18px"></i>{{ __('Regresar') }}</a>
                        <button type="submit" class="btn btn-primary"><i class="mdi mdi-content-save mdi-18px"></i>{{ __('Guardar') }}</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection
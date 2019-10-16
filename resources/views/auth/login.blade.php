@extends('layouts.auth')

@section('content')
    <div class="main-content container-fluid">
        <div class="splash-container">
            <div class="card card-border-color card-border-color-primary">
                <div class="card-header mb-0">
                    {{-- <img class="logo-img" src="{{ asset('img/logo-xx.png') }}" alt="logo" width="102" height="27"> --}}
                    <h1 width="102" height="27" class="text-bold">
                        <span class="text-danger">S</span>
                        <span class="text-primary">H</span>
                        <span class="text-warning">O</span>
                        <span class="text-success">R</span>
                    </h1>
                    <span class="splash-description">Sistema para el Hospital Regional</span>
                </div>
                <div class="card-body">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf
                        <div class="form-group input-group input-group-lg mb-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text pr-4" id="basic-addon1"><i class="icon zmdi zmdi-account zmdi-hc-lg text-primary"></i></span>
                            </div>
                            <input class="form-control @error('username') is-invalid @enderror" name="username" id="username" value="{{ old('username') }}" type="text" placeholder="Usuario" autocomplete="off" autofocus>
                            @error('username')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="form-group input-group input-group-lg mb-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text" id="basic-addon1"><i class="icon zmdi zmdi-key zmdi-hc-lg text-primary"></i></span>
                            </div>
                            <input class="form-control @error('password') is-invalid @enderror" name="password" id="password" value="{{ old('password') }}" type="password" placeholder="Contraseña">
                            @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="form-group login-tools">
                            <div class="login-remember">
                                <div class="custom-control custom-checkbox">
                                    <input class="custom-control-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                                    <label class="custom-control-label" for="remember">Mantener conectado</label>
                                </div>
                            </div>
                        </div>
                        <div class="form-group login-submit mb-5">
                            <button type="submit" class="btn btn-rounded btn-lg btn-primary">
                                {{ __('Ingresar') }}
                            </button>
                        </div>
                    </form>
                    <div class="splash-footer pb-2">
                        <a href="{{ route('password.request') }}">¿Olvidaste tu contraseña?</a>
                    </div>
                </div>
            </div>
            {{-- <div class="splash-footer"><span>Don't have an account? <a href="#">Sign Up</a></span></div> --}}
        </div>
    </div>
@endsection
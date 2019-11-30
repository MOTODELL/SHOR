@extends('layouts.auth')
@section('content')
    <div class="main-content container-fluid">
        <div class="splash-container forgot-password">
            <div class="card card-border-color card-border-color-primary">
                <div class="card-header mb-0 pt-5">
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
                    <form method="POST" action="{{ route('password.update') }}">
                        @csrf
                        <input type="hidden" name="token" value="{{ $token }}">
                        {{-- <legend class="font-weight-light">Restablecer contraseña</legend> --}}
                        <div class="form-group">
                            <label for="email">{{ __('Correo eletrónico') }}</label>
                            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ $email ?? old('email') }}" required autocomplete="email" placeholder="Correo eletrónico" autofocus>
                            @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="email">{{ __('Nueva contraseña') }}</label>
                            <input class="form-control" type="password" name="password" required placeholder="Nueva contraseña" autocomplete="off">
                            @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="email">{{ __('Confirmar contraseña') }}</label>
                            <input class="form-control" type="password" name="password_confirmation" required placeholder="Confirmar contraseña" autocomplete="off">
                            @error('password_confirmation')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        {{-- <p class="pt-1 pb-4">Don't remember your email? <a href="#">Contact Support</a>.</p> --}}
                        <div class="form-group pt-1 d-flex justify-content-between">
                            <a  href="{{ route('login') }}" class="btn btn-secondary btn-xl">
                                <i class="zmdi zmdi-long-arrow-return zmdi-hc-lg pr-1"></i>
                                <span class="h4 my-0">Regresar</span>
                            </a>
                            <button type="submit" class="btn btn-primary btn-xl">
                                <span class="h4 my-0">Cambiar contraseña</span>
                            </button>
                        </div>
                    </form>
                </div>
            </div>
            <div class="splash-footer">
                <div class="h5">
                    <span>&copy; 2019</span>
                    <a href="https://github.com/MOTODELL" target="_blank">
                        MOTODELL
                        <i class="zmdi zmdi-github zmdi-hc-lg text-dark"></i>
                    </a>
                </div>
            </div>
        </div>
    </div>
@endsection

@extends('layouts.auth')
@section('content')
    <div class="main-content container-fluid">
        <div class="splash-container forgot-password">
            <div class="card card-border-color card-border-color-primary">
                <div class="card-header mb-0">
                    {{-- <img class="logo-img" src="{{ asset('img/logo-xx.png') }}" alt="logo" width="102" height="27"> --}}
                    <h1 width="102" height="27" class="text-bold">
                        <span class="text-danger">S</span>
                        <span class="text-primary">H</span>
                        <span class="text-warning">O</span>
                        <span class="text-success">R</span>
                    </h1>
                </div>
                <div class="card-body">
                    <form method="POST" action="{{ route('password.update') }}">
                        @csrf
                        <input type="hidden" name="token" value="{{ $token }}">
                        <legend class="font-weight-light text-muted">Restablecer contraseña</legend>
                        <div class="form-group">
                            <label for="email">{{ __('E-Mail Address') }}</label>
                            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ $email ?? old('email') }}" required autocomplete="email" autofocus>

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
                        <div class="form-group pt-1">
                            <a  href="" class="btn btn-secondary pt-1 mr-5">
                                <i class="zmdi zmdi-long-arrow-return zmdi-hc-lg pr-1"></i>
                                <span class="h4 my-0">Regresar</span>
                            </a>
                            <button type="submit" class="btn btn-primary btn-xl">Recuperar contraseña</button>
                        </div>
                    </form>
                </div>
            </div>
            <div class="splash-footer">&copy; 2019 MOTODELL</div>
        </div>
    </div>
@endsection

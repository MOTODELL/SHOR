@extends('layouts.auth')

@section('content')
    <div class="main-content container-fluid">
        <div class="splash-container">
            <div class="card card-border-color card-border-color-primary">
                <div class="card-header"><img class="logo-img" src="{{ asset('img/logo-xx.png') }}" alt="logo" width="102" height="27"><span class="splash-description">Please enter your user information.</span></div>
                <div class="card-body">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf
                        <div class="form-group">
                            <input class="form-control @error('username') is-invalid @enderror" name="username" id="username" value="{{ old('username') }}" type="text" placeholder="Username" autocomplete="off">
                            @error('username')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <input class="form-control @error('password') is-invalid @enderror" name="password" id="password" value="{{ old('password') }}" type="password" placeholder="Password">
                            @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="form-group row login-tools">
                            <div class="col-6 login-remember">
                                <div class="custom-control custom-checkbox">
                                    <input class="custom-control-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                                    <label class="custom-control-label" for="remember">Remember Me</label>
                                </div>
                            </div>
                            <div class="col-6 login-forgot-password"><a href="{{ route('password.request') }}">Forgot Password?</a></div>
                        </div>
                        <div class="form-group login-submit"><button type="submit" class="btn btn-primary">
                            {{ __('Login') }}
                        </button></div>
                    </form>
                </div>
            </div>
            {{-- <div class="splash-footer"><span>Don't have an account? <a href="#">Sign Up</a></span></div> --}}
        </div>
    </div>
@endsection
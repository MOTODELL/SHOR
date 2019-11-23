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
                    <span class="splash-description">¿Olvidaste la contraseña?</span>
                </div>
                <div class="card-body">
                    <form method="POST" action="{{ route('password.email') }}">
                        @csrf
                        <legend class="font-weight-light">Restablecer contraseña</legend>
                        <div class="form-group mb-5">
                            <input class="form-control form-control-lg" type="email" name="email" required placeholder="Correo eletrónico" autocomplete="off">
                        </div>
                        {{-- <p class="pt-1 pb-4">Don't remember your email? <a href="#">Contact Support</a>.</p> --}}
                        <div class="form-group pt-1 d-flex justify-content-between">
                            <a  href="{{ route('login') }}" class="btn btn-secondary btn-xl">
                                <i class="zmdi zmdi-long-arrow-return zmdi-hc-lg pr-1"></i>
                                <span class="h4 my-0">Regresar</span>
                            </a>
                            <button type="submit" class="btn btn-primary btn-xl" href="#">
                                <span class="h4 my-0">Enviar código</span>
                                <i class="zmdi zmdi-mail-send zmdi-hc-lg pl-1"></i>
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

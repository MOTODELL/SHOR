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
                    <span class="splash-description">Sistema para el Hospital Regional</span>
                </div>
                <div class="card-body">
                    <form>
                        <legend class="font-weight-light">Restablecer contraseña</legend>
                        <div class="form-group mb-0">
                            <input class="form-control" type="email" name="email" required placeholder="Correo eletrónico" autocomplete="off">
                        </div>
                        <small class="card-subtitle pt-1 mb-5">Se enviara un código al correo electrónico proporcionado.</small>
                        {{-- <p class="pt-1 pb-4">Don't remember your email? <a href="#">Contact Support</a>.</p> --}}
                        <div class="form-group pt-1"><a class="btn btn-block btn-primary btn-xl" href="index.html">Recuperar contraseña</a></div>
                    </form>
                </div>
            </div>
            <div class="splash-footer">&copy; 2019 MOTODELL</div>
        </div>
    </div>
@endsection

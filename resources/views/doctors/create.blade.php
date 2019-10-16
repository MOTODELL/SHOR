@extends('layouts.app')
@section('header')
    <h2 class="page-head-title">Doctores</h2>
    <nav aria-label="breadcrumb" role="navigation">
        <ol class="breadcrumb page-head-nav">
            <li class="breadcrumb-item">
                <a href="{{ route('doctors.index') }}"><span class="text-primary">Doctores</span></a>
            </li>
            <li class="breadcrumb-item active">Crear doctor</li>
        </ol>
    </nav>
@endsection
@section('content')
    <div class="card card-border-color card-border-color-primary">
        <div class="card-header">
            <div class="text-center">
                <legend>Crear doctor</legend>
            </div>
        </div>
        <div class="card-body pt-0">
            <form method="POST" action="{{ route('doctors.store') }}">
                @csrf
                <div class="form-row mt-4">
                    <div class="form-group col-sm-12 col-md-6 col-lg-4">
                        <label for="name"><span class="text-danger pr-1">*</span>{{ __('Nombre(s)') }}</label>
                        <input id="name" type="text" class="form-control form-control-lg @error('name') is-invalid @enderror" placeholder="Nombre" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>
                        @error('name')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <div class="form-group col-sm-12 col-md-6 col-lg-4">
                        <label for="lastname"><span class="text-danger pr-1">*</span>{{ __('Apellido(s)') }}</label>
                        <input id="lastname" type="text" class="form-control form-control-lg @error('lastname') is-invalid @enderror" placeholder="Apellido" name="lastname" value="{{ old('lastname') }}" required autocomplete="lastname">
                        @error('lastname')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <div class="form-group col-sm-12 col-md-6 col-lg-4 d-flex justify-content-center">
                        <div>
                            <label for="lastname">
                                <span class="text-danger pr-1">*</span>
                                {{ __('Sexo') }}
                            </label>
                        </div>
                        <div class="form-check form-check-inline">
                            <label class="custom-control custom-radio custom-radio-icon custom-control-inline" data-toggle="tooltip" data-placement="bottom" title="Hombre">
                                <input type="radio" name="radioIcon" id="h" class="custom-control-input">
                                <span class="custom-control-label">
                                    <i class="icon fas fa-mars"></i>
                                </span>
                            </label>
                            <label class="custom-control custom-radio custom-radio-icon custom-control-inline" data-toggle="tooltip" data-placement="bottom" title="Mujer">
                                <input type="radio" name="radioIcon" id="m" class="custom-control-input" >
                                <span class="custom-control-label">
                                    <i class="icon fas fa-venus"></i>
                                </span>
                            </label>
                        </div>
                    </div>
                    <div class="form-group col-sm-12 col-md-6 col-lg-4">
                        <label for="profesional_id"><span class="text-danger pr-1">*</span>{{ __('Cedula profesional') }}</label>
                        <input id="profesional_id" type="text" class="form-control form-control-lg @error('profesional_id') is-invalid @enderror" name="profesional_id" required placeholder="********">
                        @error('profesional_id')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <div class="form-group col-sm-12 col-md-6 col-lg-4">
                        <label for="phone"><span class="text-danger pr-1">*</span>{{ __('Teléfono') }}</label>
                        <input id="phone" type="phone" class="form-control form-control-lg @error('phone') is-invalid @enderror" name="phone" value="{{ old('phone') }}" required autocomplete="phone" placeholder="322000000">
                        @error('phone')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <div class="form-group col-sm-12 col-md-6 col-lg-4">
                        <label for="email"><span class="text-danger pr-1">*</span>{{ __('Correo electronico') }}</label>
                        <input id="email" type="email" class="form-control form-control-lg @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" placeholder="ejemplo@correo.com">
                        @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <div class="form-group col-sm-12 col-md-6 col-lg-4">
                        <label for="birthdate"><span class="text-danger pr-1">*</span>{{ __('Fecha de nacimiento') }}</label>
                        <div class="input-group date datetimepicker" data-min-view="2" data-format="yyyy-mm-dd">
                            <input type="text" name="" id="" class="form-control">
                            <div class="input-group-append">
                                <button class="btn btn-primary">
                                    <i class="icon-th mdi mdi-calendar"></i>
                                </button>
                            </div>
                        </div>
                        {{-- <input type="date" min="1950-01-01" max="2020-12-31" id="birthdate" class="form-control form-control-lg @error('birthdate') is-invalid @enderror" name="birthdate" value="{{ old('birthdate') }}" required autocomplete="birthdate" placeholder="example123"> --}}
                        @error('birthdate')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <div class="form-group col-sm-12 col-md-6 col-lg-4">
                        <label for="street"><span class="text-danger pr-1">*</span>{{ __('Calle') }}</label>
                        <input id="street" type="text" class="form-control form-control-lg" name="street" required placeholder="el venado">
                    </div>
                    <div class="form-group col-sm-12 col-md-6 col-lg-4">
                        <label for="street"><span class="text-danger pr-1">*</span>{{ __('Número exterior') }}</label>
                        <input id="street" type="text" class="form-control form-control-lg" name="number_ext" required placeholder="644">
                    </div>
                    <div class="form-group col-sm-12 col-md-6 col-lg-4">
                        <label for="street"><span class="text-danger pr-1">*</span>{{ __('Número interior   ') }}</label>
                        <input id="street" type="text" class="form-control form-control-lg" name="number_int" required placeholder="44">
                    </div>
                    <div class="form-group col-sm-12 col-md-6 col-lg-4">
                        <label for="street"><span class="text-danger pr-1">*</span>{{ __('Colonia') }}</label>
                        <input id="street" type="text" class="form-control form-control-lg" name="colony" required placeholder="Las americas">
                    </div>
                    <div class="form-group col-sm-12 col-md-6 col-lg-4">
                        <label for="street"><span class="text-danger pr-1">*</span>{{ __('Código postal') }}</label>
                        <input id="street" type="text" class="form-control form-control-lg" name="zip_code" required placeholder="48290">
                    </div>
                    <div class="col-md-12 d-flex justify-content-center mt-2">
                        <a  href="{{ route('doctors.index') }}" class="btn btn-secondary pt-1 mr-5">
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
@push('scripts')
@endpush
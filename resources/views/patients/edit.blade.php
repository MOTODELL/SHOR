@extends('layouts.app')
@push('styles')
    <link rel="stylesheet" type="text/css" href="{{ asset('lib/datetimepicker/css/bootstrap-datetimepicker.min.css') }}"/>
    <link rel="stylesheet" type="text/css" href="{{ asset('lib/select2/css/select2.min.css') }}"/>
    <link rel="stylesheet" type="text/css" href="{{ asset('lib/bootstrap-slider/css/bootstrap-slider.min.css') }}"/>
@endpush
@section('header')
    <h2 class="page-head-title">Pacientes</h2>
    <nav aria-label="breadcrumb" role="navigation">
        <ol class="breadcrumb page-head-nav">
            <li class="breadcrumb-item">
                <a href="{{ route('patients.index') }}"><span class="text-primary">Pacientes</span></a>
            </li>
            <li class="breadcrumb-item active">Editar paciente</li>
        </ol>
    </nav>
@endsection
@section('content')
    <div class="card card-border-color card-border-color-primary">
        <div class="card-header">
            <div class="text-center">
                <legend>Editar paciente</legend>
            </div>
        </div>
        <div class="card-body pt-0">
            <form method="POST" action="{{ route('patients.update', $patient) }}">
                @csrf
                @method('PUT')
                <div class="form-row">
                    <legend class="my-0 font-weight-light">Datos personales</legend>
                    <span class="card-subtitle"><span class="text-danger pr-1">*</span>Campos obligatorios</span>
                    <hr class="w-100 mt-0 mb-5">
                    <div class="form-group col-sm-12 col-md-6 col-lg-4">
                        <label for="name"><span class="text-danger pr-1">*</span>{{ __('Nombre(s)') }}</label>
                        <input id="name" type="text" class="form-control form-control-lg @error('name') is-invalid @enderror" placeholder="Nombre" name="name" value="{{ $patient->name }}" required autocomplete="name" autofocus>
                        @error('name')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <div class="form-group col-sm-12 col-md-6 col-lg-4">
                        <label for="paternal_lastname"><span class="text-danger pr-1">*</span>{{ __('Apellido paterno') }}</label>
                        <input id="paternal_lastname" type="text" class="form-control form-control-lg @error('paternal_lastname') is-invalid @enderror" placeholder="Apellido" name="paternal_lastname" value="{{ $patient->paternal_lastname }}" required autocomplete="paternal_lastname">
                        @error('paternal_lastname')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <div class="form-group col-sm-12 col-md-6 col-lg-4">
                        <label for="maternal_lastname"><span class="text-danger pr-1">*</span>{{ __('Apellido materno') }}</label>
                        <input id="maternal_lastname" type="text" class="form-control form-control-lg @error('maternal_lastname') is-invalid @enderror" placeholder="Apellido" name="maternal_lastname" value="{{ $patient->maternal_lastname }}" required autocomplete="maternal_lastname">
                        @error('maternal_lastname')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <div class="form-group col-sm-12 col-md-6 col-lg-4">
                        <label for="curp"><span class="text-danger pr-1">*</span>{{ __('CURP') }}</label>
                        <input id="curp" type="text" data-mask="curp" class="form-control form-control-lg text-uppercase @error('curp') is-invalid @enderror" name="curp" value="{{ $patient->curp }}" required placeholder="MAVA000804MMNNRRNA9">
                        @error('curp')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <div class="form-group col-sm-12 col-md-6 col-lg-4">
                        <label for="phone"><span class="text-danger pr-1">*</span>{{ __('Teléfono') }}</label>
                        <input type="phone" data-mask="phone" class="form-control form-control-lg @error('phone') is-invalid @enderror" name="phone" id="phone" value="{{ $patient->phone }}" required autocomplete="phone" placeholder="(999) 999-9999">
                        @error('phone')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <legend class="my-0 font-weight-light">Datos del seguro social</legend>
                    <span class="card-subtitle"><span class="text-danger pr-1">*</span>Campos obligatorios</span>
                    <hr class="w-100 mt-0 mb-5">
                    <div class="form-group col-sm-12 col-md-6 col-lg-4">
                        <label for="ssn_type"><span class="text-danger pr-1">*</span>{{ __('Tipo de seguro social') }}</label>
                        <div>
                            <select class="select2 select2-lg" name="ssn_type" id="ssn_type">
                                @foreach ($ssn_types as $ssn_type)
                                    @if ($ssn_type->name == $patient->ssn->name)
                                        <option value="{{ $ssn_type->name }}" selected>{{ $ssn_type->description }}</option>
                                        @else
                                        <option value="{{ $ssn_type->name }}">{{ $ssn_type->description }}</option>
                                    @endif
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="form-group col-sm-12 col-md-6 col-lg-4">
                        <label for="ssn"><span class="text-danger pr-1">*</span>{{ __('Número del seguro social') }}</label>
                        <input id="ssn" type="text" data-mask="ssn" class="form-control form-control-lg text-uppercase @error('ssn') is-invalid @enderror" name="ssn" value="{{ $patient->ssn }}" required placeholder="07985671496">
                        @error('ssn')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <div class="form-group col-sm-12 col-md-6 col-lg-4">
                        <label for="number"><span class="text-danger pr-1">*</span>{{ __('Número de paréntesco') }}</label>
                        <input id="number" type="text" data-mask="number" class="form-control form-control-lg text-uppercase @error('number') is-invalid @enderror" name="number" value="{{ $patient->ssn->number }}" required placeholder="1">
                        @error('number')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <legend class="my-0 font-weight-light">Domicilio</legend>
                    <span class="card-subtitle"><span class="text-danger pr-1">*</span>Campos obligatorios</span>
                    <hr class="w-100 mt-0 mb-5">
                    <div class="form-group col-sm-12 col-md-6 col-lg-4">
                        <label for="viality"><span class="text-danger pr-1">*</span>{{ __('Tipo de vialidad') }}</label>
                        <div>
                            <select class="select2 select2-lg" name="viality">
                                @foreach ($vialities as $viality)
                                    @if ($viality->name == $patient->address->viality->name)
                                        <option value="{{ $viality->name }}" selected>{{ $viality->description }}</option>
                                    @else
                                        <option value="{{ $viality->name }}">{{ $viality->description }}</option>
                                    @endif
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="form-group col-sm-12 col-md-6 col-lg-4">
                        <label for="street"><span class="text-danger pr-1">*</span>{{ __('Nombre de vialidad') }}</label>
                    <input id="street" type="text" class="form-control form-control-lg" name="street" value="{{ $patient->address->street }}" required placeholder="el venado">
                    </div>
                    <div class="form-group col-sm-12 col-md-6 col-lg-4">
                        <label for="number_ext"><span class="text-danger pr-1">*</span>{{ __('Número exterior') }}</label>
                        <input id="number_ext" type="text" class="form-control form-control-lg" name="number_ext" value="{{ $patient->address->number_ext }}" required placeholder="644">
                    </div>
                    <div class="form-group col-sm-12 col-md-6 col-lg-4">
                        <label for="number_int">{{ __('Número interior') }}</label>
                        <input id="number_int" type="text" class="form-control form-control-lg" name="number_int" value="{{ $patient->address->number_int }}" placeholder="44">
                    </div>
                    <div class="form-group col-sm-12 col-md-6 col-lg-4">
                        <label for="settlementType"><span class="text-danger pr-1">*</span>{{ __('Tipo de asentamiento humano') }}</label>
                        <div>
                            <select class="select2 select2-lg" name="settlement_type">
                                @foreach ($settlement_types as $settlementType)
                                    @if ($settlementType->name == $patient->address->settlement_type->name)
                                            <option value="{{ $settlementType->name }}" selected>{{ $settlementType->description }}</option>
                                        @else
                                            <option value="{{ $settlementType->name }}">{{ $settlementType->description }}</option>
                                    @endif
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="form-group col-sm-12 col-md-6 col-lg-4">
                        <label for="colony"><span class="text-danger pr-1">*</span>{{ __('Nombre de asentamiento humano') }}</label>
                        <input id="colony" type="text" class="form-control form-control-lg" name="colony" value="{{ $patient->address->colony }}"  required placeholder="Las americas">
                    </div>
                    <div class="form-group col-sm-12 col-md-6 col-lg-4">
                        <label for="zip_code"><span class="text-danger pr-1">*</span>{{ __('Código postal') }}</label>
                        <input id="zip_code" type="text" class="form-control form-control-lg" name="zip_code" data-mask="zip-code" value="{{ $patient->address->zip_code }}"  required placeholder="48290">
                    </div>
                    <div class="form-group col-sm-12 col-md-6 col-lg-4">
                        <label for="locality"><span class="text-danger pr-1">*</span>{{ __('Localidad') }}</label>
                        <div>
                            <select class="select2 select2-lg" name="locality">
                                @foreach ($localities as $locality)
                                    @if ($locality->code == $patient->address->locality->code)
                                        <option value="{{ $locality->code }}" selected>{{ $locality->code }} - {{ $locality->description }}</option>
                                        @else
                                        <option value="{{ $locality->code }}">{{ $locality->code }} - {{ $locality->description }}</option>
                                    @endif
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="form-group col-sm-12 col-md-6 col-lg-4">
                        <label for="municipality"><span class="text-danger pr-1">*</span>{{ __('Municipio o delegación') }}</label>
                        <div>
                            <select class="select2 select2-lg" name="municipality">
                                @foreach ($municipalities as $municipality)
                                    @if ($municipality->code == $patient->address->municipality->code)
                                        <option value="{{ $municipality->code }}" selected>{{ $municipality->code }} - {{ $municipality->description }}</option>
                                        @else
                                        <option value="{{ $municipality->code }}">{{ $municipality->code }} - {{ $municipality->description }}</option>
                                    @endif
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="form-group col-sm-12 col-md-6 col-lg-4">
                        <label for="state"><span class="text-danger pr-1">*</span>{{ __('Entidad federetavia/País') }}</label>
                        <div>
                            <select class="select2 select2-lg" name="state">
                                @foreach ($states as $state)
                                    @if ($state->code == $patient->address->state->code)
                                        <option value="{{ $state->code }}" selected>{{ $state->code }} - {{ $state->description }}</option>
                                    @else
                                        <option value="{{ $state->code }}">{{ $state->code }} - {{ $state->description }}</option>
                                    @endif
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="col-md-12 d-flex justify-content-center mt-2">
                        <a  href="{{ route('patients.index') }}" class="btn btn-secondary pt-1 mr-5">
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
    <script src="{{ asset('lib/moment.js/min/moment.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('lib/select2/js/select2.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('lib/select2/js/select2.full.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('lib/jquery.maskedinput/jquery.maskedinput.js') }}" type="text/javascript"></script>
    <script src="{{ asset('lib/bootstrap-slider/bootstrap-slider.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('lib/bs-custom-file-input/bs-custom-file-input.js') }}" type="text/javascript"></script>
    <script src="{{ asset('lib/datetimepicker/js/bootstrap-datetimepicker.min.js') }}" type="text/javascript"></script>
@endpush
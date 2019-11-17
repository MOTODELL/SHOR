@extends('layouts.app')
@push('styles')
    <link rel="stylesheet" type="text/css" href="{{ asset('lib/datetimepicker/css/bootstrap-datetimepicker.min.css') }}"/>
    <link rel="stylesheet" type="text/css" href="{{ asset('lib/select2/css/select2.min.css') }}"/>
    <link rel="stylesheet" type="text/css" href="{{ asset('lib/bootstrap-slider/css/bootstrap-slider.min.css') }}"/>
    <style scoped>
        #diagnosis{
            resize: vertical; 
            max-height: 100px;
            max-height: 500px;
        }
    </style>
@endpush
@section('header')
    <h2 class="page-head-title">Citas</h2>
    <nav aria-label="breadcrumb" role="navigation">
        <ol class="breadcrumb page-head-nav">
            <li class="breadcrumb-item">
                <a href="{{ route('dates.index') }}"><span class="text-primary">Citas</span></a>
            </li>
            <li class="breadcrumb-item active">Crear cita</li>
        </ol>
    </nav>
@endsection
@section('content')
    <div class="card card-border-color card-border-color-primary">
        <div class="card-header">
            <div class="text-center">
                <legend class="h2 my-0">Crear cita</legend>
            </div>
        </div>
        <div class="card-body pt-0">
            <form method="POST" action="{{ route('dates.update', $date) }}">
                @csrf
                <div class="form-row">
                    <legend class="mb-0 h3 mt-0">Datos personales</legend>
                    <span class="card-subtitle"><span class="text-danger pr-1">*</span>Campos obligatorios</span>
                    <hr class="w-100 mt-0 mb-5">
                    <div class="form-group col-sm-12 col-md-6 col-lg-4">
                        <label for="folio"><span class="text-danger pr-1">*</span>{{ __('Folio') }}</label>
                        <input id="folio" type="text" class="form-control form-control-lg @error('folio') is-invalid @enderror" placeholder="12345" name="folio" value="{{ $date->folio }}" required autocomplete="folio">
                        @error('folio')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <div id="diagnosis" class="form-group col-sm-12 col-md-6 col-lg-4">
                        <label for="diagnosis"><span class="text-danger pr-1">*</span>{{ __('Diagnostico') }}</label>
                        <textarea id="diagnosis" type="text" class="form-control @error('diagnosis') is-invalid @enderror" placeholder="Dolor de cabeza..." name="diagnosis" value="{{ $date->diagnosis }}" rows="1" required></textarea>
                        @error('diagnosis')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <div class="form-group col-sm-12 col-md-6 col-lg-4">
                        <div class="d-flex justify-content-between">
                            <label for="street"><span class="text-danger pr-1">*</span>{{ __('Paciente') }}</label>
                            <div class="be-checkbox custom-control custom-checkbox">
                                <input class="custom-control-input" type="checkbox" id="newPatient">
                                <label class="custom-control-label" for="newPatient">¿Nuevo?</label>
                            </div>
                        </div>
                        <div>
                            <select class="select2 select2-lg" name="patient">
                                @foreach ($patients as $patient)
                                    <option value="{{ $patient->id }}">{{ $patient->name.' '.$patient->paternal_lastname.' '.$patient->folio }}</option>
                                @endforeach
                            </select>
                        </div>
                        @error('patient')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <div class="col-md-12 d-flex justify-content-center mt-2">
                        <a  href="{{ route('dates.index') }}" class="btn btn-secondary pt-1 mr-5">
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

@extends('layouts.app')
@push('styles')
    <link rel="stylesheet" type="text/css" href="{{ asset('lib/datetimepicker/css/bootstrap-datetimepicker.min.css') }}"/>
    <link rel="stylesheet" type="text/css" href="{{ asset('lib/select2/css/select2.min.css') }}"/>
    <link rel="stylesheet" type="text/css" href="{{ asset('lib/bootstrap-slider/css/bootstrap-slider.min.css') }}"/>
    <style scoped>
        #diagnosis{
            resize: vertical; 
            min-height: 70px;
            max-height: 100px;
        }
    </style>
@endpush
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
                <legend class="h2 my-0">Crear doctor</legend>
            </div>
        </div>
        <div class="card-body pt-0">
            <form method="POST" action="{{ route('doctors.store') }}">
                @csrf
                <div class="form-row">
                    <legend class="mb-0 h3 mt-0">Datos del paciente</legend>
                    <span class="card-subtitle"><span class="text-danger pr-1">*</span>Campos obligatorios</span>
                    <hr class="w-100 mt-0 mb-5">
                    <div class="form-group col-sm-12 col-md-6 col-lg-4">
                        <label for="name"><span class="text-danger pr-1">*</span>{{ __('Nombre del paciente') }}</label>
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
                    <div class="form-group col-sm-12 col-md-6 col-lg-4">
                        <label for="date_start"><span class="text-danger pr-1">*</span>{{ __('Fecha de inicio') }}</label>
                        <div class="input-group input-group-lg date datetimepicker" data-start-view="4" data-min-view="2" data-date-format="yyyy-mm-dd">
                            <input type="text" name="date_start" id="date_start" class="form-control" size="16" value="" readonly>
                            <div class="input-group-append">
                                <button type="button" class="btn btn-primary">
                                    <i class="icon-th mdi mdi-calendar"></i>
                                </button>
                            </div>
                        </div>
                        @error('date_start')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <div class="form-group col-sm-12 col-md-6 col-lg-4">
                        <label for="date_end"><span class="text-danger pr-1">*</span>{{ __('Fecha de finalización') }}</label>
                        <div class="input-group input-group-lg date datetimepicker" data-start-view="4" data-min-view="2" data-date-format="yyyy-mm-dd">
                            <input type="text" name="date_end" id="date_end" class="form-control" size="16" value="" readonly>
                            <div class="input-group-append">
                                <button type="button" class="btn btn-primary">
                                    <i class="icon-th mdi mdi-calendar"></i>
                                </button>
                            </div>
                        </div>
                        @error('date_end')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <div class="form-group col-sm-12 col-md-6 col-lg-4">
                        <label for="cause"><span class="text-danger pr-1">*</span>{{ __('Causes') }}</label>
                        <div>
                            <select class="select2 select2-lg" name="cause" id="cause">
                                @foreach ($causes as $cause)
                                    <option value="{{ $cause->code }}">{{ $cause->description }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="form-group col-sm-12 col-md-6 col-lg-4">
                        <label for="service"><span class="text-danger pr-1">*</span>{{ __('Causes') }}</label>
                        <div>
                            <select class="select2 select2-lg" name="service" id="service">
                                @foreach ($services as $service)
                                    <option value="{{ $service->code }}">{{ $service->description }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="form-group col-sm-12 col-md-6 col-lg-4">
                        <label for="status"><span class="text-danger pr-1">*</span>{{ __('Estado de la cita') }}</label>
                        <div>
                            <select class="select2 select2-lg" name="status" id="status">
                                @foreach ($status as $state)
                                    <option value="{{ $state->name }}">{{ $state->description }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="form-group col-sm-12 col-md-6 col-lg-4">
                        <label for="extra_cost"><span class="text-danger pr-1">*</span>{{ __('Costo extra') }}</label>
                        <div class="input-group input-group-lg">
                            <span class="input-group-prepend"><span class="input-group-text">$</span></span>
                            <input id="extra_cost" type="text" data-mask="extra_cost" class="form-control form-control-lg text-uppercase @error('extra_cost') is-invalid @enderror" name="extra_cost" value="{{ old('extra_cost') }}"  placeholder="500">
                            <span class="input-group-append"><span class="input-group-text">MXN</span></span>
                        </div>
                        @error('extra_cost')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <div id="observations" class="form-group col-sm-12 col-md-6 col-lg-4">
                        <label for="observations"><span class="text-danger pr-1">*</span>{{ __('Observaciones') }}</label>
                        <textarea id="observations" type="text" class="form-control @error('observations') is-invalid @enderror" placeholder="Dolor de cabeza..." name="observations" value="{{ old('observations') }}" rows="1" ></textarea>
                        @error('observations')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
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
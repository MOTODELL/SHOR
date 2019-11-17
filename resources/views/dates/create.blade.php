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
            <form method="POST" action="{{ route('dates.store') }}">
                @csrf
                <div class="form-row">
                    <legend class="my-0 font-weight-light">Información general</legend>
                    <span class="card-subtitle"><span class="text-danger pr-1">*</span>Campos obligatorios</span>
                    <hr class="w-100 mt-0 mb-5">
                    <div class="form-group col-sm-12 col-md-6 col-lg-4">
                        <label for="folio"><span class="text-danger pr-1">*</span>{{ __('Folio') }}</label>
                        <input id="folio" type="text" class="form-control form-control-lg @error('folio') is-invalid @enderror" placeholder="12345" name="folio" value="{{ old('folio') }}"  autocomplete="folio">
                        @error('folio')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <div id="diagnosis" class="form-group col-sm-12 col-md-6 col-lg-4">
                        <label for="diagnosis"><span class="text-danger pr-1">*</span>{{ __('Diagnostico') }}</label>
                        <textarea id="diagnosis" type="text" class="form-control @error('diagnosis') is-invalid @enderror" placeholder="Dolor de cabeza..." name="diagnosis" value="{{ old('diagnosis') }}" rows="1" ></textarea>
                        @error('diagnosis')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <legend class="my-0 font-weight-light">Datos del paciente</legend>
                    <span class="card-subtitle"><span class="text-danger pr-1">*</span>Campos obligatorios</span>
                    <hr class="w-100 mt-0 mb-5">
                    <div class="form-group col-sm-12 col-md-6 col-lg-4 mb-0">
                        <div class="d-flex justify-content-between">
                            <label class="mb-0" for="name"><span class="text-danger pr-1">*</span>{{ __('Nombre del paciente') }}</label>
                            <div class="be-checkbox custom-control custom-checkbox mb-2">
                                <input class="custom-control-input" type="checkbox" id="newPatient">
                                <label class="custom-control-label" for="newPatient">¿Nuevo?</label>
                            </div>
                        </div>
                        <div id="patientSelect">
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
                    <div id="patientForm" class="form-row pl-1">
                        <div class="form-group col-sm-12 col-md-6 col-lg-4 mt-5">
                            <input id="name" type="text" class="form-control form-control-lg @error('name') is-invalid @enderror" placeholder="Nombre" name="name" value="{{ old('name') }}"  autocomplete="name" autofocus>
                            @error('name')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>                       
                        <div class="form-group col-sm-12 col-md-6 col-lg-4">
                            <label for="paternal_lastname"><span class="text-danger pr-1">*</span>{{ __('Apellido paterno') }}</label>
                            <input id="paternal_lastname" type="text" class="form-control form-control-lg @error('paternal_lastname') is-invalid @enderror" placeholder="Apellido" name="paternal_lastname" value="{{ old('paternal_lastname') }}"  autocomplete="paternal_lastname">
                            @error('paternal_lastname')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="form-group col-sm-12 col-md-6 col-lg-4">
                            <label for="maternal_lastname"><span class="text-danger pr-1">*</span>{{ __('Apellido materno') }}</label>
                            <input id="maternal_lastname" type="text" class="form-control form-control-lg @error('maternal_lastname') is-invalid @enderror" placeholder="Apellido" name="maternal_lastname" value="{{ old('maternal_lastname') }}"  autocomplete="maternal_lastname">
                            @error('maternal_lastname')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="form-group col-sm-12 col-md-6 col-lg-4">
                            <label for="curp"><span class="text-danger pr-1">*</span>{{ __('CURP') }}</label>
                            <input id="curp" type="text" data-mask="curp" class="form-control form-control-lg text-uppercase @error('curp') is-invalid @enderror" name="curp" value="{{ old('curp') }}"  placeholder="MAVA000804MMNNRRNA9">
                            @error('curp')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="form-group col-sm-12 col-md-6 col-lg-4">
                            <label for="phone"><span class="text-danger pr-1">*</span>{{ __('Teléfono') }}</label>
                            <input type="phone" data-mask="phone" class="form-control form-control-lg @error('phone') is-invalid @enderror" name="phone" id="phone" value="{{ old('phone') }}"  autocomplete="phone" placeholder="(999) 999-9999">
                            @error('phone')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <legend class="my-0 font-weight-light">Número del seguro social</legend>
                        <span class="card-subtitle"><span class="text-danger pr-1">*</span>Campos obligatorios</span>
                        <hr class="w-100 mt-0 mb-5">
                        <div class="form-group col-sm-12 col-md-6 col-lg-4">
                            <label for="ssn_type"><span class="text-danger pr-1">*</span>{{ __('Tipo de seguro social') }}</label>
                            <div>
                                <select class="select2 select2-lg" name="ssn_type" id="ssn_type">
                                    @foreach ($ssn_types as $ssn_type)
                                        <option value="{{ $ssn_type->name }}">{{ $ssn_type->description }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="form-group col-sm-12 col-md-6 col-lg-4">
                            <label for="ssn"><span class="text-danger pr-1">*</span>{{ __('Número del seguro social') }}</label>
                            <input id="ssn" type="text" data-mask="ssn" class="form-control form-control-lg text-uppercase @error('ssn') is-invalid @enderror" name="ssn"  placeholder="07985671496">
                            @error('ssn')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="form-group col-sm-12 col-md-6 col-lg-4">
                            <label for="number"><span class="text-danger pr-1">*</span>{{ __('Orden de afiliación') }}</label>
                            <input id="number" type="text" data-mask="number" class="form-control form-control-lg text-uppercase @error('number') is-invalid @enderror" name="number"  placeholder="1">
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
                            <label for="street"><span class="text-danger pr-1">*</span>{{ __('Tipo de vialidad') }}</label>
                            <div>
                                <select class="select2 select2-lg" name="viality">
                                    @foreach ($vialities as $viality)
                                        <option value="{{ $viality->name }}">{{ $viality->description }}</option>
                                    @endforeach
                                </select>
                            </div>
                            @error('viality')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="form-group col-sm-12 col-md-6 col-lg-4">
                            <label for="street"><span class="text-danger pr-1">*</span>{{ __('Nombre de vialidad') }}</label>
                            <input id="street" type="text" class="form-control form-control-lg" name="street"  placeholder="el venado">
                        </div>
                        <div class="form-group col-sm-12 col-md-6 col-lg-4">
                            <label for="number_ext"><span class="text-danger pr-1">*</span>{{ __('Número exterior') }}</label>
                            <input id="number_ext" type="text" class="form-control form-control-lg" name="number_ext"  placeholder="644">
                        </div>
                        <div class="form-group col-sm-12 col-md-6 col-lg-4">
                            <label for="number_int">{{ __('Número interior') }}</label>
                            <input id="number_int" type="text" class="form-control form-control-lg" name="number_int" placeholder="44">
                        </div>
                        <div class="form-group col-sm-12 col-md-6 col-lg-4">
                            <label for="settlementType"><span class="text-danger pr-1">*</span>{{ __('Tipo de asentamiento humano') }}</label>
                            <div>
                                <select class="select2 select2-lg" name="settlement_type">
                                    @foreach ($settlement_types as $settlementType)
                                        <option value="{{ $settlementType->name }}">{{ $settlementType->description }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="form-group col-sm-12 col-md-6 col-lg-4">
                            <label for="colony"><span class="text-danger pr-1">*</span>{{ __('Nombre de asentamiento humano') }}</label>
                            <input id="colony" type="text" class="form-control form-control-lg" name="colony"  placeholder="Las americas">
                        </div>
                        <div class="form-group col-sm-12 col-md-6 col-lg-4">
                            <label for="zip_code"><span class="text-danger pr-1">*</span>{{ __('Código postal') }}</label>
                            <input id="zip_code" type="text" class="form-control form-control-lg" name="zip_code" data-mask="zip-code"  placeholder="48290">
                        </div>
                        <div class="form-group col-sm-12 col-md-6 col-lg-4">
                            <label for="locality"><span class="text-danger pr-1">*</span>{{ __('Localidad') }}</label>
                            <div>
                                <select class="select2 select2-lg" name="locality">
                                    @foreach ($localities as $locality)
                                        <option value="{{ $locality->code }}">{{ $locality->code }} - {{ $locality->description }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="form-group col-sm-12 col-md-6 col-lg-4">
                            <label for="municipality"><span class="text-danger pr-1">*</span>{{ __('Municipio o delegación') }}</label>
                            <div>
                                <select class="select2 select2-lg" name="municipality">
                                    @foreach ($municipalities as $municipality)
                                        <option value="{{ $municipality->code }}">{{ $municipality->code }} - {{ $municipality->description }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="form-group col-sm-12 col-md-6 col-lg-4">
                            <label for="state"><span class="text-danger pr-1">*</span>{{ __('Entidad federetavia/País') }}</label>
                            <div>
                                <select class="select2 select2-lg" name="state">
                                    @foreach ($states as $state)
                                        <option value="{{ $state->code }}">{{ $state->code }} - {{ $state->description }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>    
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
    <script>
        function showFormPatient() {
            if($('#newPatient').prop('checked')){
                $('#patientForm').show();
                $('#patientSelect').hide();
            } else {
                $('#patientForm').hide();
                $('#patientSelect').show();
            }
        }
        $('#newPatient').change(function(){
            showFormPatient();
        });
        showFormPatient();
    </script>
    <script src="{{ asset('lib/moment.js/min/moment.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('lib/select2/js/select2.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('lib/select2/js/select2.full.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('lib/jquery.maskedinput/jquery.maskedinput.js') }}" type="text/javascript"></script>
    <script src="{{ asset('lib/bootstrap-slider/bootstrap-slider.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('lib/bs-custom-file-input/bs-custom-file-input.js') }}" type="text/javascript"></script>
    <script src="{{ asset('lib/datetimepicker/js/bootstrap-datetimepicker.min.js') }}" type="text/javascript"></script>
@endpush

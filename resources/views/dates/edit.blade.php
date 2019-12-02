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
    <h2 class="page-head-title">Urgencias</h2>
    <nav aria-label="breadcrumb" role="navigation">
        <ol class="breadcrumb page-head-nav">
            <li class="breadcrumb-item">
                <a href="{{ route('dates.index') }}"><span class="text-primary">Urgencias</span></a>
            </li>
            <li class="breadcrumb-item active">Editar cita</li>
        </ol>
    </nav>
@endsection
@section('content')
    <div class="card card-border-color card-border-color-primary">
        <div class="card-header">
            <div class="text-center">
                <legend class="h2 my-0">Editar cita</legend>
            </div>
        </div>
        <div class="card-body pt-0">
            <form method="POST" action="{{ route('dates.update', $date->uuid) }}">
                @csrf
                @method('PUT')
                <div class="forms patient-form">
                    <div id="patientForm" class="form-row pl-1">
                        <legend class="my-0 font-weight-light">Datos del paciente</legend>
                        <span class="card-subtitle"><span class="text-danger pr-1">*</span>Campos obligatorios</span>
                        <hr class="w-100 mt-0 mb-5">
                        <div class="form-group col-sm-12 col-md-6 col-lg-4">
                            <label for="name"><span class="text-danger pr-1">*</span>{{ __('Nombre del paciente') }}</label>
                            <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" placeholder="Nombre" name="name" value="{{ empty(old('name')) ? $date->patient->name : old('name') }}" required autocomplete="name" autofocus>
                            @error('name')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>                       
                        <div class="form-group col-sm-12 col-md-6 col-lg-4">
                            <label for="paternal_lastname"><span class="text-danger pr-1">*</span>{{ __('Apellido paterno') }}</label>
                            <input id="paternal_lastname" type="text" class="form-control @error('paternal_lastname') is-invalid @enderror" placeholder="Apellido" name="paternal_lastname" value="{{ empty(old('paternal_lastname')) ? $date->patient->paternal_lastname : old('paternal_lastname') }}" required autocomplete="paternal_lastname">
                            @error('paternal_lastname')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="form-group col-sm-12 col-md-6 col-lg-4">
                            <label for="maternal_lastname"><span class="text-danger pr-1">*</span>{{ __('Apellido materno') }}</label>
                            <input id="maternal_lastname" type="text" class="form-control @error('maternal_lastname') is-invalid @enderror" placeholder="Apellido" name="maternal_lastname" value="{{ empty(old('maternal_lastname')) ? $date->patient->maternal_lastname : old('maternal_lastname') }}" required autocomplete="maternal_lastname">
                            @error('maternal_lastname')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="form-group col-sm-12 col-md-6 col-lg-4">
                            <label for="curp"><span class="text-danger pr-1">*</span>{{ __('CURP') }}</label>
                            <input id="curp" type="text" data-mask="curp" class="form-control text-uppercase @error('curp') is-invalid @enderror" name="curp" value="{{ empty(old('curp')) ? $date->patient->curp : old('curp') }}" required placeholder="MAVA000804MMNNRRNA9">
                            @error('curp')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="form-group col-sm-12 col-md-6 col-lg-4">
                            <label for="phone"><span class="text-danger pr-1">*</span>{{ __('Teléfono') }}</label>
                            <input type="phone" data-mask="phone" class="form-control @error('phone') is-invalid @enderror" name="phone" id="phone" value="{{ empty(old('phone')) ? $date->patient->phone : old('phone') }}" required autocomplete="phone" placeholder="(999) 999-9999">
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
                                <select class="select2" name="ssn_type" id="ssn_type">
                                    @foreach ($ssn_types as $ssn_type)
                                        <option value="{{ $ssn_type->name }}">{{ $ssn_type->description }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div id="ssnHide" class="form-group col-sm-12 col-md-6 col-lg-4">
                            <label for="ssn"><span class="text-danger pr-1">*</span>{{ __('Número del seguro social') }}</label>
                            <input id="ssn" type="text" data-mask="ssn" class="form-control text-uppercase @error('ssn') is-invalid @enderror" name="ssn" value="{{ empty(old('ssn')) ? $date->patient->ssn->ssn : old('ssn') }}" placeholder="07985671496">
                            @error('ssn')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div id="numberHide" class="form-group col-sm-12 col-md-6 col-lg-4">
                            <label for="number">{{ __('Orden de afiliación') }}</label>
                            <input id="number" type="text" data-mask="number" class="form-control text-uppercase @error('number') is-invalid @enderror" name="number" value="{{ empty(old('number')) ? $date->patient->ssn->number : old('number') }}" placeholder="1">
                            @error('number')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <legend class="my-0 font-weight-light">Domicilio</legend>
                        <hr class="w-100 mt-0 mb-5">
                        <div class="form-group col-sm-12 col-md-6 col-lg-4">
                            <label for="street">{{ __('Tipo de vialidad') }}</label>
                            <div>
                                <select class="select2" name="viality">
                                    <option value="none">Seleccione el tipo de vialidad</option>
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
                            <label for="street">{{ __('Nombre de vialidad') }}</label>
                            <input id="street" type="text" class="form-control" name="street" value="{{ empty(old('street')) ? $date->patient->address->street : old('street') }}" placeholder="el venado">
                        </div>
                        <div class="form-group col-sm-12 col-md-6 col-lg-4">
                            <label for="number_ext">{{ __('Número exterior') }}</label>
                            <input id="number_ext" type="text" class="form-control" name="number_ext" value="{{ empty(old('number_ext')) ? $date->patient->address->number_ext : old('number_ext') }}" placeholder="644">
                        </div>
                        <div class="form-group col-sm-12 col-md-6 col-lg-4">
                            <label for="number_int">{{ __('Número interior') }}</label>
                            <input id="number_int" type="text" class="form-control" name="number_int" value="{{ empty(old('number_int')) ? $date->patient->address->number_int : old('number_int') }}" placeholder="44">
                        </div>
                        <div class="form-group col-sm-12 col-md-6 col-lg-4">
                            <label for="settlementType">{{ __('Tipo de asentamiento humano') }}</label>
                            <div>
                                <select class="select2" name="settlement_type">
                                    <option value="none">Seleccione el tipo de asentamiento</option>
                                    @foreach ($settlement_types as $settlementType)
                                        <option value="{{ $settlementType->name }}">{{ $settlementType->description }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="form-group col-sm-12 col-md-6 col-lg-4">
                            <label for="colony">{{ __('Nombre de asentamiento humano') }}</label>
                            <input id="colony" type="text" class="form-control" name="colony" value="{{ empty(old('colony')) ? $date->patient->address->colony : old('colony') }}" placeholder="Las americas">
                        </div>
                        <div class="form-group col-sm-12 col-md-6 col-lg-4">
                            <label for="zip_code">{{ __('Código postal') }}</label>
                            <input id="zip_code" type="text" class="form-control" name="zip_code" data-mask="zip-code" value="{{ empty(old('zip_code')) ? (($date->patient->address->zip_code) ? $date->patient->address->zip_code->code : '') : old('zip_code') }}" placeholder="48290">
                            <div class="invalid-feedback zip_code_invalid">
                                No existe el código postal.
                            </div>
                        </div>
                        <div class="form-group col-sm-12 col-md-6 col-lg-4">
                            <label for="locality">{{ __('Localidad') }}</label>
                            <div>
                                <select class="select2" name="locality">
                                    <option value="none">Seleccione la localidad</option>
                                    @foreach ($localities as $locality)
                                        <option value="{{ $locality->code }}">{{ $locality->code }} - {{ $locality->description }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="form-group col-sm-12 col-md-6 col-lg-4">
                            <label for="municipality">{{ __('Municipio o delegación') }}</label>
                            <div>
                                <select class="select2" name="municipality">
                                    <option value="none">Seleccione el municipio</option>
                                    @foreach ($municipalities as $municipality)
                                        <option value="{{ $municipality->id }}" {{ ($date->patient->address->municipality && $municipality->id == $date->patient->address->municipality->id) ? "selected" : "" }}>{{ $municipality->code }} - {{ $municipality->description }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="form-group col-sm-12 col-md-6 col-lg-4">
                            <label for="state">{{ __('Entidad federetavia/País') }}</label>
                            <div>
                                <select class="select2" name="state">
                                    <option value="none">Seleccione el estado</option>
                                    @foreach ($states as $state)
                                        <option value="{{ $state->code }}" {{ $date->patient->address->state && $state->code == $date->patient->address->state->code ? "selected" : "" }}>{{ $state->code }} - {{ $state->description }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <legend class="my-0 font-weight-light">Detalles de la cita</legend>
                        <span class="card-subtitle"><span class="text-danger pr-1">*</span>Campos obligatorios</span>
                        <hr class="w-100 mt-0 mb-5">
                        <div class="form-group col-sm-12 col-md-6 col-lg-4">
                            <label><span class="text-danger pr-1">*</span>{{ __('Estado de la cita') }}</label>
                            <select name="status" class="select2 select2-lg">
                                @foreach ($status as $stat)
                                    <option value="{{ $stat->name }}" {{ $date->status->name == $stat->name ? 'selected' : '' }}>{{ $stat->description }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group col-sm-12 col-md-6 col-lg-8">
                            <label for="diagnosis">{{ __('Diagnostico inicial (opcional)') }}</label>
                            <input id="diagnosis" type="text" class="form-control form-control-lg" name="diagnosis">
                        </div>
                    </div>
                </div>
                <div class="col-md-12 d-flex justify-content-center mt-2">
                    <a  href="{{ URL::previous() }}" class="btn btn-secondary pt-1 mr-5">
                        <i class="zmdi zmdi-long-arrow-return zmdi-hc-lg pr-1"></i>
                        <span class="h4 my-0">Regresar</span>
                    </a>
                    <button type="submit" class="btn btn-primary pt-1 mr-5">
                        <i class="zmdi zmdi-floppy zmdi-hc-lg pr-1"></i>
                        <span class="h4 my-0">Guardar</span>
                    </button>
                </div>
            </form>
        </div>
    </div>
@endsection
@push('scripts')
    <script>
        if($("input#zip_code").length > 0) {
            var typingTimer;
            var doneTypingInterval = 1700;
            var $input = $("input#zip_code");
            var $this = $(this);

            $input.on('keyup', function (e) {
                clearTimeout(typingTimer);
                typingTimer = setTimeout(doneTyping, doneTypingInterval);
            });
            
            $input.on('keydown', function (e) {
                var keyCode = e.keyCode || e.which;
                if (keyCode == 9) { // key 9 = tab
                    doneTyping();
                }
                clearTimeout(typingTimer);
            });
            
            function doneTyping () {
                $.ajaxSetup({
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    }
                });
                $.ajax({
                    method: "POST",
                    url: "{{ route('fetch.zip_codes') }}",
                    data: { zip_code: $input.val() },
                    beforeSend: function() {
                        $("label[for=zip_code]").append('<div class="spinner-border spinner-border-sm text-success ml-2" role="status"><span class="sr-only">Cargando...</span></div>');
                    },
                    complete: function() {
                        $("label[for=zip_code] .spinner-border").remove();
                    }
                })
                .done(function( data ) {
                    let municipality = data.municipality;
                    let state = data.state;
                    console.log(municipality);
                    console.log(state);
                    let $municipality = $('select[name="municipality"]');
                    let $state = $('select[name="state"]');
                    $municipality.select2('trigger', 'select', {
                        data: {id: municipality.id}
                    });
                    $state.select2('trigger', 'select', {
                        data: {id: state.code}
                    });
                    $("input#zip_code").focus();
                    // $("input#zip_code").addClass('is-valid');
                    // $('.zip_code_invalid').hide();
                }).fail(function () {
                    // $("input#zip_code").removeClass('is-valid');
                    // $('.zip_code_invalid').show();
                });
            }
        }
        function ssnTypeChangeVal() {
            if( $('#ssn_type').val() == 'seguro-popular' ) {
                $('#ssnHide').show();
                $('#numberHide').show();
            } else if( $('#ssn_type').val() == 'ninguna' ) {
                $('#ssnHide').hide();
                $('#numberHide').hide();
            } else {
                $('#ssnHide').show();
                $('#numberHide').hide();
            }
        }
        $('#ssn_type').change(function() {
            ssnTypeChangeVal();
        });
        ssnTypeChangeVal();
    </script>
    <script src="{{ asset('lib/moment.js/min/moment.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('lib/select2/js/select2.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('lib/select2/js/select2.full.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('lib/jquery.maskedinput/jquery.maskedinput.js') }}" type="text/javascript"></script>
    <script src="{{ asset('lib/bootstrap-slider/bootstrap-slider.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('lib/bs-custom-file-input/bs-custom-file-input.js') }}" type="text/javascript"></script>
    <script src="{{ asset('lib/datetimepicker/js/bootstrap-datetimepicker.min.js') }}" type="text/javascript"></script>
@endpush

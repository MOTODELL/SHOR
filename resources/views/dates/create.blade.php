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
<div class="d-flex justify-content-between">
    <nav aria-label="breadcrumb" role="navigation">
            <h2 class="page-head-title">Urgencias</h2>
        <ol class="breadcrumb page-head-nav">
            <li class="breadcrumb-item">
                <a href="{{ route('dates.index') }}"><span class="text-primary">Urgencias</span></a>
            </li>
            <li class="breadcrumb-item active">Crear cita</li>
        </ol>
    </nav>
    <div class="d-flex align-items-end text-muted">
        <span class="h4">
            <strong class="mr-1">Fecha: </strong>
            {{ $today }}
        </span>
    </div>
</div>
@endsection
@section('content')
    <div class="card card-border-color card-border-color-primary">
        <div class="card-header">
            <div class="text-center">
                <legend class="h2 mt-0 mb-4">Crear cita</legend>
            </div>
        </div>
        <div class="card-body pt-0">
            <form method="POST" action="{{ route('dates.store') }}">
                @csrf
                <div class="forms main-form">
                    <div class="form-row justify-content-center">
                        <div class="form-group col-9">
                            <input id="search" type="text" class="form-control" placeholder="Ingrese el nombre, CURP o Número de Afiliación" value="{{ old('folio') }}"  autocomplete="folio">
                        </div>
                        <div class="form-group col-3">
                            <button type="button" class="btn btn-primary btn-navigate h-100 w-100 shadow-sm" data-show="patient-form" title="Nuevo paciente">
                                <i class="zmdi zmdi-account-add zmdi-hc-lg mr-1"></i>
                                <span class="h2"><small>Nuevo paciente</small></span>
                            </button>
                        </div>
                    </div>
                    <div class="form-row justify-content-center">
                        <div class="col-12">
                            <table class="table table-striped table-hover table-fw-widget dataTable">
                                <thead>
                                    <tr>
                                        <th style="width:20%;">Núm. Afiliación</th>
                                        <th style="width:30%;">Nombre completo</th>
                                        <th style="width:30%;">CURP</th>
                                        <th style="width:20%;"></th>
                                    </tr>
                                </thead>
                                <tbody>
                                @foreach ($patients as $patient)
                                    <tr class="success">
                                        <td class="cell-detail">
                                            <span>{{ $patient->ssn->ssn }}</span>
                                        </td>
                                        <td class="date-avatar cell-detail date-info">
                                            <span>{{ $patient->getFullName() }}</span>
                                        </td>
                                        <td class="cell-detail">
                                            <span>{{ $patient->curp}}</span>
                                        </td>
                                        <td class="text-right">
                                            <button type="button" class="btn btn-outline-success btn-navigate" data-id="{{ $patient->id }}" data-name="{{ $patient->getFullName() }}" data-show="diagnosis-form">
                                                <i class="zmdi zmdi-check zmdi-hc-lg mr-2"></i>
                                                <span class="h3"><small>Seleccionar</small></span>
                                            </button>
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <div class="forms diagnosis-form" style="display:none">
                    <input type="hidden" name="id-exist">
                    <div class="form-row justify-content-center">
                        <div class="form-group col-10">
                            <span class="h3 text-muted"><strong>Para:</strong> <span class="patient-name"></span></span>
                            <hr class="mt-0 mb-5">
                            <legend class="font-weight-light">Diagnóstico inicial (opcional)</legend>
                            <textarea class="form-control" name="diagnosis_exist" rows="5" style="resize:none"></textarea>
                        </div>
                    </div>
                    <div class="col-md-12 d-flex justify-content-center mt-2">
                        <button type="button" class="btn btn-secondary pt-1 mr-5 btn-navigate" data-show="main-form">
                            <i class="zmdi zmdi-long-arrow-return zmdi-hc-lg pr-1"></i>
                            <span class="h4 my-0">Seleccionar otro paciente</span>
                        </button>
                        <button type="submit" class="btn btn-primary pt-1 mr-5">
                            <i class="zmdi zmdi-floppy zmdi-hc-lg pr-1"></i>
                            <span class="h4 my-0">Guardar</span>
                        </button>
                    </div>
                </div>
                <div class="forms patient-form" style="display:none">
                    <div id="patientForm" class="form-row pl-1">
                        <legend class="my-0 font-weight-light">Datos del paciente</legend>
                        <span class="card-subtitle"><span class="text-danger pr-1">*</span>Campos obligatorios</span>
                        <hr class="w-100 mt-0 mb-5">
                        <div class="form-group col-sm-12 col-md-6 col-lg-4">
                            <label for="name"><span class="text-danger pr-1">*</span>{{ __('Nombre del paciente') }}</label>
                            <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" placeholder="Nombre" name="name" value="{{ old('name') }}"  autocomplete="name" autofocus>
                            @error('name')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>                       
                        <div class="form-group col-sm-12 col-md-6 col-lg-4">
                            <label for="paternal_lastname"><span class="text-danger pr-1">*</span>{{ __('Apellido paterno') }}</label>
                            <input id="paternal_lastname" type="text" class="form-control @error('paternal_lastname') is-invalid @enderror" placeholder="Apellido" name="paternal_lastname" value="{{ old('paternal_lastname') }}"  autocomplete="paternal_lastname">
                            @error('paternal_lastname')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="form-group col-sm-12 col-md-6 col-lg-4">
                            <label for="maternal_lastname"><span class="text-danger pr-1">*</span>{{ __('Apellido materno') }}</label>
                            <input id="maternal_lastname" type="text" class="form-control @error('maternal_lastname') is-invalid @enderror" placeholder="Apellido" name="maternal_lastname" value="{{ old('maternal_lastname') }}"  autocomplete="maternal_lastname">
                            @error('maternal_lastname')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="form-group col-sm-12 col-md-6 col-lg-4">
                            <label for="curp"><span class="text-danger pr-1">*</span>{{ __('CURP') }}</label>
                            <input id="curp" type="text" data-mask="curp" class="form-control text-uppercase @error('curp') is-invalid @enderror" name="curp" value="{{ old('curp') }}"  placeholder="MAVA000804MMNNRRNA9">
                            @error('curp')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="form-group col-sm-12 col-md-6 col-lg-4">
                            <label for="phone"><span class="text-danger pr-1">*</span>{{ __('Teléfono') }}</label>
                            <input type="phone" data-mask="phone" class="form-control @error('phone') is-invalid @enderror" name="phone" id="phone" value="{{ old('phone') }}"  autocomplete="phone" placeholder="(999) 999-9999">
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
                        <div class="form-group col-sm-12 col-md-6 col-lg-4">
                            <label for="ssn"><span class="text-danger pr-1">*</span>{{ __('Número del seguro social') }}</label>
                            <input id="ssn" type="text" data-mask="ssn" class="form-control text-uppercase @error('ssn') is-invalid @enderror" name="ssn"  placeholder="07985671496">
                            @error('ssn')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="form-group col-sm-12 col-md-6 col-lg-4">
                            <label for="number"><span class="text-danger pr-1">*</span>{{ __('Número de integrante') }}</label>
                            <input id="number" type="text" data-mask="number" class="form-control text-uppercase @error('number') is-invalid @enderror" name="number"  placeholder="1">
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
                                <select class="select2" name="viality">
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
                            <input id="street" type="text" class="form-control" name="street"  placeholder="el venado">
                        </div>
                        <div class="form-group col-sm-12 col-md-6 col-lg-4">
                            <label for="number_ext"><span class="text-danger pr-1">*</span>{{ __('Número exterior') }}</label>
                            <input id="number_ext" type="text" class="form-control" name="number_ext"  placeholder="644">
                        </div>
                        <div class="form-group col-sm-12 col-md-6 col-lg-4">
                            <label for="number_int">{{ __('Número interior') }}</label>
                            <input id="number_int" type="text" class="form-control" name="number_int" placeholder="44">
                        </div>
                        <div class="form-group col-sm-12 col-md-6 col-lg-4">
                            <label for="settlementType"><span class="text-danger pr-1">*</span>{{ __('Tipo de asentamiento humano') }}</label>
                            <div>
                                <select class="select2" name="settlement_type">
                                    @foreach ($settlement_types as $settlementType)
                                        <option value="{{ $settlementType->name }}">{{ $settlementType->description }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="form-group col-sm-12 col-md-6 col-lg-4">
                            <label for="colony"><span class="text-danger pr-1">*</span>{{ __('Nombre de asentamiento humano') }}</label>
                            <input id="colony" type="text" class="form-control" name="colony"  placeholder="Las americas">
                        </div>
                        <div class="form-group col-sm-12 col-md-6 col-lg-4">
                            <label for="zip_code"><span class="text-danger pr-1">*</span>{{ __('Código postal') }}</label>
                            <input id="zip_code" type="text" class="form-control" name="zip_code" data-mask="zip-code"  placeholder="48290">
                        </div>
                        <div class="form-group col-sm-12 col-md-6 col-lg-4">
                            <label for="locality"><span class="text-danger pr-1">*</span>{{ __('Localidad') }}</label>
                            <div>
                                <select class="select2" name="locality">
                                    @foreach ($localities as $locality)
                                        <option value="{{ $locality->code }}">{{ $locality->code }} - {{ $locality->description }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="form-group col-sm-12 col-md-6 col-lg-4">
                            <label for="municipality"><span class="text-danger pr-1">*</span>{{ __('Municipio o delegación') }}</label>
                            <div>
                                <select class="select2" name="municipality">
                                    @foreach ($municipalities as $municipality)
                                        <option value="{{ $municipality->code }}">{{ $municipality->code }} - {{ $municipality->description }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="form-group col-sm-12 col-md-6 col-lg-4">
                            <label for="state"><span class="text-danger pr-1">*</span>{{ __('Entidad federetavia/País') }}</label>
                            <div>
                                <select class="select2" name="state">
                                    @foreach ($states as $state)
                                        <option value="{{ $state->code }}">{{ $state->code }} - {{ $state->description }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <legend class="my-0 font-weight-light">Diagnóstico inicial (opcional)</legend>
                        <hr class="w-100 mt-1 mb-5">
                        <textarea class="form-control mb-3" placeholder="Diagnóstico inicial" name="diagnosis" cols="30" rows="5" style="resize:none"></textarea>
                    </div>
                    <div class="col-md-12 d-flex justify-content-center mt-2">
                        <button type="button" class="btn btn-secondary pt-1 mr-5 btn-navigate" data-show="main-form">
                            <i class="zmdi zmdi-long-arrow-return zmdi-hc-lg pr-1"></i>
                            <span class="h4 my-0">Regresar</span>
                        </button>
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
        $('.btn-navigate').click(function () {
            $('.forms').each(function () {
                $(this).hide();
            });

            $('.' + $(this).data('show')).show('500');
            if($(this).data('show') == 'diagnosis-form') {
                $('input[name="id-exist"]').val($(this).data('id'));
                $('.patient-name').html($(this).data('name'));
            } else {
                $('input[name="id-exist"]').val('');
            }
        });
    </script>
    <script src="{{ asset('lib/datatables/datatables.net/js/jquery.dataTables.js') }}" type="text/javascript"></script>
	<script src="{{ asset('lib/datatables/datatables.net-bs4/js/dataTables.bootstrap4.js') }}" type="text/javascript"></script>
	<script src="{{ asset('lib/datatables/datatables.net-buttons/js/dataTables.buttons.min.js') }}" type="text/javascript"></script>
	<script src="{{ asset('lib/datatables/datatables.net-buttons/js/buttons.flash.min.js') }}" type="text/javascript"></script>
	<script src="{{ asset('lib/datatables/jszip/jszip.min.js') }}" type="text/javascript"></script>
	<script src="{{ asset('lib/datatables/pdfmake/pdfmake.min.js') }}" type="text/javascript"></script>
	<script src="{{ asset('lib/datatables/pdfmake/vfs_fonts.js') }}" type="text/javascript"></script>
    <script src="{{ asset('lib/moment.js/min/moment.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('lib/select2/js/select2.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('lib/select2/js/select2.full.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('lib/jquery.maskedinput/jquery.maskedinput.js') }}" type="text/javascript"></script>
    <script src="{{ asset('lib/bootstrap-slider/bootstrap-slider.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('lib/bs-custom-file-input/bs-custom-file-input.js') }}" type="text/javascript"></script>
    <script src="{{ asset('lib/datetimepicker/js/bootstrap-datetimepicker.min.js') }}" type="text/javascript"></script>
@endpush

@extends('layouts.app')
@push('styles')
    <link rel="stylesheet" type="text/css" href="{{ asset('lib/datetimepicker/css/bootstrap-datetimepicker.min.css') }}"/>
    <link rel="stylesheet" type="text/css" href="{{ asset('lib/select2/css/select2.min.css') }}"/>
    <link rel="stylesheet" type="text/css" href="{{ asset('lib/bootstrap-slider/css/bootstrap-slider.min.css') }}"/>
@endpush
@section('header')
    <h2 class="page-head-title">Usuarios</h2>
    <nav aria-label="breadcrumb" role="navigation">
        <ol class="breadcrumb page-head-nav">
            <li class="breadcrumb-item">
                <a href="{{ route('users.index') }}"><span class="text-primary">Usuarios</span></a>
            </li>
            <li class="breadcrumb-item active">Crear usuario</li>
        </ol>
    </nav>
@endsection

@section('content')
    <div class="card card-border-color card-border-color-primary">
        <div class="card-header">
            <div class="text-center">
                <legend class="h2 my-0">Crear usuario</legend>
            </div>
        </div>
        <div class="card-body pt-0">
            <form method="POST" action="{{ route('users.store') }}">
                @csrf
                <div class="form-row">
                    <legend class="my-0 font-weight-light">Datos personales</legend>
                    <span class="card-subtitle"><span class="text-danger pr-1">*</span>Campos obligatorios</span>
                    <hr class="w-100 mt-0 mb-5">
                    <div class="form-group col-sm-12 col-md-6 col-lg-4">
                        <label for="name"><span class="text-danger pr-1">*</span>{{ __('Nombre(s)') }}</label>
                        <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" placeholder="Nombre(s)" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>
                        @error('name')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <div class="form-group col-sm-12 col-md-6 col-lg-4">
                        <label for="paternal_lastname"><span class="text-danger pr-1">*</span>{{ __('Apellido paterno') }}</label>
                        <input id="paternal_lastname" type="text" class="form-control @error('paternal_lastname') is-invalid @enderror" placeholder="Apellido paterno" name="paternal_lastname" value="{{ old('paternal_lastname') }}" required autocomplete="paternal_lastname">
                        @error('paternal_lastname')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <div class="form-group col-sm-12 col-md-6 col-lg-4">
                        <label for="maternal_lastname"><span class="text-danger pr-1">*</span>{{ __('Apellido materno') }}</label>
                        <input id="maternal_lastname" type="text" class="form-control @error('maternal_lastname') is-invalid @enderror" placeholder="Apellido materno" name="maternal_lastname" value="{{ old('maternal_lastname') }}" required autocomplete="maternal_lastname">
                        @error('maternal_lastname')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <div class="form-group col-sm-12 col-md-6 col-lg-4">
                        <label for="curp"><span class="text-danger pr-1">*</span>{{ __('CURP') }}</label>
                        <input id="curp" type="text" data-mask="curp" class="form-control text-uppercase @error('curp') is-invalid @enderror" name="curp" value="{{ old('curp') }}" required placeholder="MAVA000804MMNNRRNA9">
                        @error('curp')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <div class="form-group col-sm-12 col-md-6 col-lg-4">
                        <label for="role"><span class="text-danger pr-1">*</span>{{ __('Tipo de usuario') }}</label>
                        <select name="role" id="role" class="form-control custom-select select2" style="width: 100%">
                        @foreach ($roles as $role)
                            <option value="{{ $role->name }}">{{ $role->description }}</option>
                        @endforeach
                        </select>
                    </div>
                    <div id="professionalId" class="form-group col-sm-12 col-md-6 col-lg-4">
                        <label for="professional_id"><span class="text-danger pr-1">*</span>{{ __('Cédula profesional') }}</label>
                        <input id="professional_id" type="text" data-mask="professional_id" class="form-control @error('professional_id') is-invalid @enderror" name="professional_id" placeholder="12345678">
                        @error('professional_id')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <div id="selectDependency" class="form-group col-sm-12 col-md-6 col-lg-4">
                        <label for="dependency"><span class="text-danger pr-1">*</span>{{ __('Área de servicio') }}</label>
                        <select name="dependency" id="dependency" class="form-control custom-select select2" style="width: 100%">
                        @foreach ($dependencies as $dependency)
                            <option value="{{ $dependency->name }}">{{ $dependency->description }}</option>
                        @endforeach
                        </select>
                    </div>
                    <legend class="my-0 font-weight-light">Datos de contacto</legend>
                    <span class="card-subtitle"><span class="text-danger pr-1">*</span>Campos obligatorios</span>
                    <hr class="w-100 mt-0 mb-5">
                    <div class="form-group col-sm-12 col-md-6 col-lg-4">
                        <label for="phone"><span class="text-danger pr-1">*</span>{{ __('Teléfono') }}</label>
                        <input type="phone" data-mask="phone" class="form-control @error('phone') is-invalid @enderror" name="phone" id="phone" value="{{ old('phone') }}" required autocomplete="phone" placeholder="(999) 999-9999">
                        @error('phone')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <div class="form-group col-sm-12 col-md-6 col-lg-4">
                        <label for="email"><span class="text-danger pr-1">*</span>{{ __('Correo electrónico') }}</label>
                        <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" placeholder="ejemplo@correo.com">
                        @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <legend class="my-0 font-weight-light">Datos de usuario</legend>
                    <span class="card-subtitle"><span class="text-danger pr-1">*</span>Campos obligatorios</span>
                    <hr class="w-100 mt-0 mb-5">
                    <div class="form-group col-sm-12 col-md-6 col-lg-4">
                        <label for="username"><span class="text-danger pr-1">*</span>{{ __('Nombre de usuario') }}</label>
                        <input id="username" type="text" class="form-control @error('username') is-invalid @enderror" name="username" value="{{ old('username') }}" required autocomplete="username" placeholder="example123">
                        <small class="card-subtitle pt-1">Debe contener un mínimo de 8 carácteres.</small>
                        @error('username')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <div class="form-group col-sm-12 col-md-6 col-lg-4">
                        <label for="password"><span class="text-danger pr-1">*</span>{{ __('Contraseña') }}</label>
                        <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required placeholder="********">
                        <small class="card-subtitle pt-1">Debe contener un mínimo de 8 carácteres.</small>
                        @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <div class="form-group col-sm-12 col-md-6 col-lg-4">
                        <label for="password-confirm"><span class="text-danger pr-1">*</span>{{ __('Confirmación de contraseña') }}</label>
                        <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required placeholder="********">
                        <small class="card-subtitle pt-1">Debe contener un mínimo de 8 carácteres.</small>
                    </div>
                    <div class="col-md-12 d-flex justify-content-center mt-2">
                        <a  href="{{ route('users.index') }}" class="btn btn-secondary pt-1 mr-5">
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
        function roles() {
            switch ($('#role').val()) {
                case 'admin': case 'analist':
                    $('#selectDependency').hide();
                    $('#professionalId').hide();
                    break;
                case 'user':
                    $('#selectDependency').show();
                    $('#professionalId').hide();
                    break;
                case 'doctor':
                    $('#selectDependency').hide();
                    $('#professionalId').show();
                    break;
            
                default:
                    break;
            }
        }
        $('#role').change(function(){
            roles();
        });
        roles();
    </script>
    <script src="{{ asset('lib/moment.js/min/moment.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('lib/select2/js/select2.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('lib/select2/js/select2.full.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('lib/jquery.maskedinput/jquery.maskedinput.js') }}" type="text/javascript"></script>
    <script src="{{ asset('lib/bootstrap-slider/bootstrap-slider.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('lib/bs-custom-file-input/bs-custom-file-input.js') }}" type="text/javascript"></script>
    <script src="{{ asset('lib/datetimepicker/js/bootstrap-datetimepicker.min.js') }}" type="text/javascript"></script>
@endpush
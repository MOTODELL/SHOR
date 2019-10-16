@extends('layouts.app')

@section('header')
    <h2 class="page-head-title">Usuarios</h2>
    <nav aria-label="breadcrumb" role="navigation">
        <ol class="breadcrumb page-head-nav">
            <li class="breadcrumb-item">
                <a href="{{ route('users.index') }}"><span class="text-primary">Usuarios</span></a>
            </li>
            <li class="breadcrumb-item active">Crear Usuario</li>
        </ol>
    </nav>
@endsection

@section('content')
    <div class="card card-border-color card-border-color-primary">
        <div class="card-header">
            <div class="text-center">
                <legend>Crear Usuario</legend>
            </div>
        </div>
        <div class="card-body pt-0">
            <form method="POST" action="{{ route('users.store') }}">
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
                        <label for="role"><span class="text-danger pr-1">*</span>{{ __('Tipo de usuario') }}</label>
                        <select name="role" id="role" class="form-control form-control-lg custom-select select2" style="width: 100%">
                        @foreach ($roles as $role)
                            <option value="{{ $role->name }}">{{ $role->description }}</option>
                        @endforeach
                        </select>
                    </div>
                    <div id="selectDependency" class="form-group col-sm-12 col-md-6 col-lg-4">
                        <label for="dependency"><span class="text-danger pr-1">*</span>{{ __('Area correspondiente') }}</label>
                        <select name="dependency" id="dependency" class="form-control form-control-lg custom-select select2" style="width: 100%">
                        @foreach ($dependencies as $dependency)
                            <option value="{{ $dependency->name }}">{{ $dependency->description }}</option>
                        @endforeach
                        </select>
                    </div>
                    <div class="form-group col-sm-12 col-md-6 col-lg-4">
                        <label for="username"><span class="text-danger pr-1">*</span>{{ __('Nombre de usuario') }}</label>
                        <input id="username" type="text" class="form-control form-control-lg @error('username') is-invalid @enderror" name="username" value="{{ old('username') }}" required autocomplete="username" placeholder="example123">
                        <small class="card-subtitle pt-1">Debe contener un minimo de 8 carácteres.</small>
                        @error('username')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <div class="form-group col-sm-12 col-md-6 col-lg-4">
                        <label for="password"><span class="text-danger pr-1">*</span>{{ __('Contraseña') }}</label>
                        <input id="password" type="password" class="form-control form-control-lg @error('password') is-invalid @enderror" name="password" required placeholder="********">
                        <small class="card-subtitle pt-1">Debe contener un minimo de 8 carácteres.</small>
                        @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <div class="form-group col-sm-12 col-md-6 col-lg-4">
                        <label for="password-confirm"><span class="text-danger pr-1">*</span>{{ __('Confirmación de contraseña') }}</label>
                        <input id="password-confirm" type="password" class="form-control form-control-lg" name="password_confirmation" required placeholder="********">
                        <small class="card-subtitle pt-1">Debe contener un minimo de 8 carácteres.</small>
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
        function showDependency() {
            if($('#role').val() == 'admin'){
                $('#selectDependency').hide();
            } else {
                $('#selectDependency').show();
            }
        }
        $('#role').change(function(){
            showDependency();
        });
        showDependency();
    </script>
@endpush
@extends('layouts.app')

@section('content')
<div class="row">
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb py-0">
            <li class="breadcrumb-item"><a href="{{ route('dependencies.index') }}">Dependencias</a></li>
            <li class="breadcrumb-item active">Crear dependencia</li>
        </ol>
    </nav>
</div>
{{-- DATOS DE INICIO DE SESION --}}
<div class="card shadow-none rounded">
    <fieldset>
        <div class="card-body">
            <h4 class="text-blue-dark pl-1">{{ __('Crear nueva dependencia') }}</h5>
            <hr class="w-100 my-0">
            <small><span class="text-danger pr-1">*</span>Campo requerido</small>
            <form method="POST" action="{{ route('dependencies.store') }}">
                @csrf
                @method('POST')
                <div class="form-row mt-4">
                    <div class="form-group col-sm-12 col-md-6 col-lg-4 col-xl-3">
                        <label for="alias"><span class="text-danger pr-1">*</span>{{ __('Nombre') }}</label>
                        <input id="alias" type="text" class="form-control form-control-lg @error('alias') is-invalid @enderror" placeholder="CTA" name="alias" value="{{ old('alias') }}" required autocomplete="alias" autofocus>
                        @error('alias')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <div class="form-group col-sm-12 col-md-6 col-lg-4 col-xl-3">
                        <label for="name"><span class="text-danger pr-1">*</span>{{ __('Descripción ') }}</label>
                        <input id="name" type="text" class="form-control form-control-lg @error('name') is-invalid @enderror" placeholder="Coordinacion de tecnologias 1" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>
                        @error('name')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <div class="form-group col-sm-12 col-md-6 col-lg-4 col-xl-3">
                        <label for="valid_ip"><span class="text-danger pr-1">*</span>{{ __('IP valida') }}</label>
                        <input id="valid_ip" type="text" class="form-control form-control-lg @error('valid_ip') is-invalid @enderror" name="valid_ip" value="{{ old('valid_ip') }}" required autocomplete="valid_ip" placeholder="168.1.1.1">
                        @error('valid_ip')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <div class="form-group col-sm-12 col-md-6 col-lg-4 col-xl-3">
                        <label for="slug"><span class="text-danger pr-1">*</span>{{ __('Slug') }}</label>
                        <input id="slug" type="text" class="form-control form-control-lg @error('slug') is-invalid @enderror" name="slug" value="{{ old('slug') }}" required autocomplete="slug" placeholder="cta">
                        @error('slug')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <div class="col-sm-12 d-flex justify-content-center mt-2">
                        <a  href="{{ route('dependencies.index') }}" class="btn btn-secondary mr-5"><i class="mdi mdi-keyboard-return mdi-18px"></i>{{ __('Regresar') }}</a>
                        <button type="submit" class="btn btn-primary"><i class="mdi mdi-content-save mdi-18px"></i>{{ __('Guardar') }}</button>
                    </div>
                </div>
            </form>
        </div>
    </fieldset>
</div>
@endsection
@extends('layouts.app')

@section('content')
<div class="row">
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb py-0">
            <li class="breadcrumb-item"><a href="{{ route('dependencies.index') }}">Dependencias</a></li>
            <li class="breadcrumb-item active">Editar dependencia</li>
        </ol>
    </nav>
</div>
{{-- DATOS DE INICIO DE SESION --}}
<div class="card shadow-none rounded">
    <fieldset>
        <div class="card-body">
            <h4 class="text-blue-dark pl-1">{{ __('Editar dependencia') }}</h5>
            <hr class="w-100 my-0">
            <small><span class="text-danger pr-1">*</span>Campo requerido</small>
            <form method="POST" action="{{ route('dependencies.update', $dependency->id) }}">
                @csrf
                @method('PUT')
                <div class="form-row mt-4">
                    <div class="form-group col-sm-12 col-md-6 col-xl-4">
                        <label for="alias"><span class="text-danger pr-1">*</span>{{ __('Nombre') }}</label>
                        <input id="alias" type="text" class="form-control form-control-lg @error('alias') is-invalid @enderror" placeholder="CTA" name="alias" value="{{ $dependency->alias }}" required autocomplete="alias">
                        @error('alias')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <div class="form-group col-sm-12 col-md-6 col-xl-4">
                        <label for="name"><span class="text-danger pr-1">*</span>{{ __('Descripción') }}</label>
                        <input id="name" type="text" class="form-control form-control-lg @error('name') is-invalid @enderror" placeholder="Nombre" name="name" value="{{ $dependency->name }}" required autocomplete="name">
                        @error('name')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <div class="form-group col-sm-12 col-md-6 col-xl-4">
                        <label for="slug"><span class="text-danger pr-1">*</span>{{ __('Slug') }}</label>
                        <input id="slug" type="text" class="form-control form-control-lg @error('slug') is-invalid @enderror" name="slug" value="{{ $dependency->slug }}" required autocomplete="slug" placeholder="cta">
                        @error('slug')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <div class="form-group col-sm-12 col-md-6 col-xl-4">
                        <label for="valid_ip"><span class="text-danger pr-1">*</span>{{ __('Ip valida') }}</label>
                        <input id="valid_ip" type="text" class="form-control form-control-lg @error('valid_ip') is-invalid @enderror" name="valid_ip" value="{{ $dependency->valid_ips()->first()->valid_ip }}" required autocomplete="valid_ip" placeholder="168.1.1.1">
                        @error('valid_ip')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <div class="col-sm-12 d-flex justify-content-center mt-2">
                        <a  href="{{ route('dependencies.index') }}" class="btn btn-secondary mr-5"><i class="mdi mdi-keyboard-return mdi-18px"></i>{{ __('Regresar') }}</a>
                        <button type="submit" class="btn btn-primary"><i class="mdi mdi-refresh mdi-18px"></i>{{ __('Actualizar') }}</button>
                    </div>
                </div>
            </form>
        </div>
    </fieldset>
</div>
@endsection

<style>
.form-control-normal {
    display: block;
    width: 100%;
    height: calc(1.5em + .75rem + 2px);
    padding: .375rem .75rem;
    font-size: 1rem;
    font-weight: 400;
    line-height: 1.5;
    color: #001830;
    background-color: #fff;
    background-clip: padding-box;
    border: 1px solid #bfcddb;
    border-radius: .25rem;
        border-top-left-radius: 0.25rem;
        border-bottom-left-radius: 0.25rem;
    transition: border-color .15s ease-in-out,box-shadow .15s ease-in-out;
}
.form-control-normal:focus {
    color: #001830;
    background-color: #fff;
    border-color: #a0bfde;
    outline: 0;
    box-shadow: 0 0 0 .2rem rgba(21,89,141,.25);
}
.text-blue-dark{
    color: #0c3452;
}
</style>
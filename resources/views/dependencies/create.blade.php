@extends('layouts.app')
@section('header')
    <h2 class="page-head-title">Dependencias</h2>
    <nav aria-label="breadcrumb" role="navigation">
        <ol class="breadcrumb page-head-nav">
            <li class="breadcrumb-item">
                <a href="{{ route('users.index') }}"><span class="text-primary">Dependencias</span></a>
            </li>
            <li class="breadcrumb-item active">Crear Dependencia</li>
        </ol>
    </nav>
@endsection
@section('content')
    <div class="card card-border-color card-border-color-primary">
        <div class="card-header">
            <div class="text-center">
                <legend>Crear Dependencia</legend>
            </div>
        </div>
        <div class="card-body">
            <form method="POST" action="{{ route('dependencies.store') }}">
                @csrf
                @method('POST')
                <div class="form-row mt-4">
                    <div class="form-group col-sm-12 col-md-6">
                        <label for="name"><span class="text-danger pr-1">*</span>{{ __('Nombre') }}</label>
                        <input id="name" type="text" class="form-control form-control-lg @error('name') is-invalid @enderror" placeholder="Urgencias" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>
                        @error('name')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <div class="form-group col-sm-12 col-md-6">
                        <label for="description"><span class="text-danger pr-1">*</span>{{ __('Descripción') }}</label>
                        <input id="description" type="text" class="form-control form-control-lg @error('description') is-invalid @enderror" placeholder="Urgencias" name="description" value="{{ old('description') }}" required autocomplete="description" autofocus>
                        @error('description')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <div class="col-sm-12 d-flex justify-content-center mt-2">
                        <a  href="{{ route('dependencies.index') }}" class="btn btn-secondary mr-5"><i class="icon icon-left mdi mdi-keyboard-return mdi-18px"></i>{{ __('Regresar') }}</a>
                        <button type="submit" class="btn btn-primary"><i class="icon icon-left mdi mdi-content-save mdi-18px"></i>{{ __('Guardar') }}</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection
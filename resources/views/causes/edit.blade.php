@extends('layouts.app')
@section('header')
    <h2 class="page-head-title">Causes</h2>
    <nav aria-label="breadcrumb" role="navigation">
        <ol class="breadcrumb page-head-nav">
            <li class="breadcrumb-item">
                <a href="{{ route('causes.index') }}"><span class="text-primary">Causes</span></a>
            </li>
            <li class="breadcrumb-item active">Editar cause</li>
        </ol>
    </nav>
@endsection
@section('content')
    <div class="card card-border-color card-border-color-primary">
        <div class="card-header">
            <div class="text-center">
                <legend>Editar cause</legend>
            </div>
        </div>
        <div class="card-body">
            <form method="POST" action="{{ route('dependencies.update', $cause) }}">
                @csrf
                @method('PUT')
                <div class="form-row mt-4">
                    <div class="form-group col-sm-12 col-md-6">
                        <label for="code"><span class="text-danger pr-1">*</span>{{ __('Código') }}</label>
                        <input id="code" type="text" class="form-control form-control-lg @error('code') is-invalid @enderror" placeholder="Urgencias" name="code" value="{{ $cause->code }}" required autocomplete="code" autofocus>
                        @error('code')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <div class="form-group col-sm-12 col-md-6">
                        <label for="description"><span class="text-danger pr-1">*</span>{{ __('Descripción') }}</label>
                        <input id="description" type="text" class="form-control form-control-lg @error('description') is-invalid @enderror" placeholder="Urgencias" name="description" value="{{ $cause->description }}" required autocomplete="description" autofocus>
                        @error('description')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <div class="col-sm-12 d-flex justify-content-center mt-2">
                        <a  href="{{ route('Causes.index') }}" class="btn btn-secondary pt-1 mr-5">
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
@extends('layouts.app')

@section('header')
    <h2 class="page-head-title">Consultorio</h2>
    <nav aria-label="breadcrumb" role="navigation">
        <ol class="breadcrumb page-head-nav">
            <li class="breadcrumb-item">
                <a href="{{ route('consulting-rooms.index') }}"><span class="text-primary">Consultorio</span></a>
            </li>
            <li class="breadcrumb-item active">Crear Consultorio</li>
        </ol>
    </nav>
@endsection
@section('content')
<div class="card card-border-color card-border-color-primary">
        <div class="card-header">
            <div class="text-center">
                <legend>Crear Consultorio</legend>
            </div>
        </div>
        <div class="card-body pt-0">
            <form method="POST" action="{{ route('consulting-rooms.store') }}">
                @csrf
                <div class="form-row mt-4">
                    <div class="form-group col-sm-12 col-md-6 col-lg-4">
                        <label for="name"><span class="text-danger pr-1">*</span>{{ __('Nombre') }}</label>
                        <input id="name" type="text" class="form-control form-control-lg @error('name') is-invalid @enderror" placeholder="Nombre" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>
                        @error('name')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <div class="form-group col-sm-12 col-md-6 col-lg-4">
                        <label for="description"><span class="text-danger pr-1">*</span>Descripción</label>
                        <input id="description" type="text" class="form-control form-control-lg @error('description') is-invalid @enderror" placeholder="Urgencias" name="description" value="{{ old('description') }}" required autocomplete="description" autofocus>
                        @error('description')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                    <div class="form-group col-sm-12 col-md-6 col-lg-4">
                        <label for="sift"><span class="text-danger pr-1">*</span>Turno</label>
                        <div class="form-check mt-2">
                            <div class="custom-control custom-checkbox custom-control-inline">
                                <input type="checkbox" class="custom-control-input" id="checkMorning" value="{{ old('checkMorning') }}">
                                <label for="checkMorning" class="custom-control-label custom-control-color">Matutino</label>
                            </div>
                            <div class="custom-control custom-checkbox custom-control-inline">
                                <input type="checkbox" class="custom-control-input" id="checkEvening" value="{{ old('checkEvening') }}">
                                <label for="checkEvening" class="custom-control-label custom-control-color">Vespertino</label>
                            </div>
                        </div>
                        {{-- <div class="col-12 col-sm-8 col-lg-6">
                            <div class="form-check form-check-inline">
                                <label class="custom-control custom-radio custom-radio-icon custom-control-inline">
                                    <input type="radio" name="radioIcon" id="radioIcon1" class="custom-control-input">
                                    <span class="custom-control-label">
                                        <i class="icon fas fa-sun"></i>
                                    </span>
                                </label>
                                <label class="custom-control custom-radio custom-radio-icon custom-control-inline">
                                    <input type="radio" name="radioIcon" id="radioIcon2" class="custom-control-input">
                                    <span class="custom-control-label">
                                        <i class="icon fas fa-moon"></i>
                                    </span>
                                </label>
                            </div>
                        </div> --}}
                    </div>
                    <div class="form-group col-sm-12">
                        <label class="col-12 col-form-label pb-3">Selecciona los horarios de cada día</label>
                        <div class="col-12 col-sm-8 col-lg-6">
                            <div class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input" id="checkMonday">
                                <label for="checkMonday" class="custom-control-label custom-control-color">Lunes</label>
                            </div>
                            <div class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input" id="checkTuesday">
                                <label for="checkTuesday" class="custom-control-label custom-control-color">Martes</label>
                            </div>
                            <div class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input" id="checkWednesday">
                                <label for="checkWednesday" class="custom-control-label custom-control-color">Miercoles</label>
                            </div>
                            <div class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input" id="checkThursday">
                                <label for="checkThursday" class="custom-control-label custom-control-color">Jueves</label>
                            </div>
                            <div class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input" id="checkFriday">
                                <label for="checkFriday" class="custom-control-label custom-control-color">Viernes</label>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12 d-flex justify-content-center mt-2">
                        <a  href="{{ route('consulting-rooms.index') }}" class="btn btn-secondary pt-1 mr-5">
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
@push('inline-scripts')
@endpush
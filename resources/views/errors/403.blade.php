@extends('errors::layout')

@section('title', 403)

@section('message')
<link rel="stylesheet" type="text/css" href="{{ asset('lib/material-design-icons/css/material-design-iconic-font.min.css') }}" />
<link rel="stylesheet" href="{{ asset('css/beagle.css') }}" type="text/css" />
<link rel="stylesheet" href="{{ asset('css/app.css') }}" type="text/css" />
Acceso denegado
<br>
<a  href="{{ route('home.index') }}" class="btn btn-secondary pt-1 mr-5">
    <i class="zmdi zmdi-long-arrow-return zmdi-hc-lg pr-1"></i>
    <span class="h4 my-0">Regresar al inicio</span>
</a>
@endsection

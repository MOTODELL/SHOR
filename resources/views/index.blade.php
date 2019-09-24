{{-- Aquí se extiende al layout de app --}}
{{-- Si quieres probar los diferentes menús, se encuentran en 'layouts/examples' --}}
{{-- Ejemplo: @extends('layouts.examples.mega-menu') --}}
@extends('layouts.app')

@section('header')
    <h2 class="page-head-title">Blank Page</h2>
    <nav aria-label="breadcrumb" role="navigation">
        <ol class="breadcrumb page-head-nav">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item"><a href="#">Pages</a></li>
            <li class="breadcrumb-item active">Blank Page Header</li>
        </ol>
    </nav>
@endsection

@section('content')
    <h3 class="text-center">Content goes here!</h3>
@endsection
@extends('layouts.app')

@section('header')
    <h2 class="page-head-title">Consultorio</h2>
    <nav aria-label="breadcrumb" role="navigation">
        <ol class="breadcrumb page-head-nav">
            <li class="breadcrumb-item">
                {{-- <a href="{{ route('consulting-rooms.index') }}"><span class="text-primary">Consultorio</span></a> --}}
            </li>
            <li class="breadcrumb-item active">Crear Consultorio</li>
        </ol>
    </nav>
@endsection


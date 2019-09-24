@extends('layouts.examples._core')

@section('layout')
    <div class="be-wrapper be-offcanvas-menu be-fixed-sidebar">
        {{-- Navbar --}}
        @includeIf('include.navbar-offcanvas')
        {{-- Left Sidebar --}}
        @includeIf('include.left-sidebar')
        {{-- Content --}}
        <div class="be-content">
            <div class="page-head">
                @yield('header')
            </div>
            <div class="main-content container-fluid">
                @yield('content')
            </div>
        </div>
        {{-- Right Sidebar --}}
        @includeIf('include.right-sidebar')
    </div>
@endsection
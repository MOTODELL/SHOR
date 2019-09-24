@extends('layouts.examples._core')

@section('layout')
    <div class="be-wrapper be-aside">
        {{-- Navbar --}}
        @includeIf('include.navbar')
        {{-- Left Sidebar --}}
        @includeIf('include.left-sidebar')
        {{-- Content --}}
        <div class="be-content">
            <aside class="page-aside">
                <div class="be-scroller-aside">
                    <div class="aside-content">
                        <div class="content">
                            @yield('aside-content')
                        </div>
                    </div>
                </div>
            </aside>
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
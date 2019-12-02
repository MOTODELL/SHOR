@extends('layouts.app')
@section('header')
    <div class="main-content container-fluid">
        <div class="row">
            <div class="col-12 col-lg-6 col-xl-3">
                <div class="widget widget-tile">
                    <div class="chart sparkline pl-5">
                        <i class="zmdi zmdi-accounts zmdi-hc-5x"></i>
                    </div>
                    <div class="data-info pr-5 pt-3">
                        <div class="desc">Usuarios</div>
                        <div class="value">
                            <span class="indicator indicator-equal mdi mdi-chevron-right"></span>
                            <span class="number" data-toggle="counter" data-end="113">{{ $users }}</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 col-lg-6 col-xl-3">
                <div class="widget widget-tile">
                    <div class="chart sparkline pl-5">
                        <i class="zmdi zmdi-male-female zmdi-hc-5x"></i>
                    </div>
                    <div class="data-info pr-5 pt-3">
                        <div class="desc">Pacientes</div>
                        <div class="value">
                            <span class="indicator indicator-equal mdi mdi-chevron-right"></span>
                            <span class="number" data-toggle="counter" data-end="113">{{ $patients }}</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 col-lg-6 col-xl-3">
                <div class="widget widget-tile">
                    <div class="chart sparkline pl-5">
                        <i class="icon fas fa-ambulance zmdi-hc-4x"></i>
                    </div>
                    <div class="data-info pr-5 pt-3">
                        <div class="desc">Citas en Urgencias</div>
                        <div class="value">
                            <span class="indicator indicator-positive mdi mdi-chevron-up"></span>
                            <span class="number" data-toggle="counter" data-end="113">{{ $dates }}</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 col-lg-6 col-xl-3">
                <div class="widget widget-tile">
                    <div class="chart sparkline pl-5">
                        <i class="zmdi zmdi-calendar-check zmdi-hc-4x"></i>
                    </div>
                    <div class="data-info pr-5 pt-3">
                        <div class="desc">Urgencias en la última semana</div>
                        <div class="value">
                            <span class="indicator indicator-positive mdi mdi-chevron-up"></span>
                            <span class="number" data-toggle="counter" data-end="113">{{ $dates }}</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('content')
    <h3 class="text-center">Content goes here!</h3>
@endsection
@extends('layouts.app')
@section('header')
    <div class="container">
        <div class="row">
            <div class="col-12 col-lg-6 col-xl-4">
                <div class="widget widget-tile card card-border-color card-border-color-danger">
                    <div class="chart sparkline pl-5">
                        <i class="icon fas fa-ambulance zmdi-hc-5x ml-5"></i>
                    </div>
                    <div class="data-info pr-5 pt-3">
                        <div class="desc">Urgencias</div>
                        <div class="value">
                            <span class="indicator indicator-negative mdi mdi-chevron-right"></span>
                            <span class="number" data-toggle="counter" data-end="113">{{ $totalDates }}</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 col-lg-6 col-xl-4">
                <div class="widget widget-tile card card-border-color card-border-color-primary">
                    <div class="chart sparkline pl-5">
                        <i class="zmdi zmdi-male-female zmdi-hc-5x ml-5 pl-3"></i>
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
            <div class="col-12 col-lg-6 col-xl-4">
                <div class="widget widget-tile card card-border-color card-border-color-success">
                    <div class="chart sparkline pl-5">
                        <i class="zmdi zmdi-accounts zmdi-hc-5x ml-5"></i>
                    </div>
                    <div class="data-info pr-5 pt-3">
                        <div class="desc">Usuarios</div>
                        <div class="value">
                            <span class="indicator text-success mdi mdi-chevron-right"></span>
                            <span class="number" data-toggle="counter" data-end="113">{{ $users }}</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('content')
    <div class="container">
        <div class="card card-border-color card-border-color-info">
            <div class="card-body">
                <div class="container">
                    {!! $dateChart->container() !!}
                </div>
            </div>
        </div>
    </div>
@endsection
@push('scripts')
    <script src="{{ asset('lib/highcharts/highcharts.js') }}" type="text/javascript"></script>
    @if($dateChart)
        {!! $dateChart->script() !!}
    @endif
@endpush
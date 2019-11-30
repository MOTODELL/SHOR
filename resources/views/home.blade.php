@extends('layouts.app')
@section('header')
    <div class="main-content container-fluid">
        <div class="row">
            <div class="col-12 col-lg-6 col-xl-3">
                <div class="widget widget-tile">
                    <div class="chart sparkline pl-5">
                        <i class="zmdi zmdi-account-add zmdi-hc-5x"></i>
                    </div>
                    <div class="data-info pr-5 pt-3">
                        <div class="desc">New Users</div>
                        <div class="value">
                            <span class="indicator indicator-equal mdi mdi-chevron-right"></span>
                            <span class="number" data-toggle="counter" data-end="113">113</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 col-lg-6 col-xl-3">
                <div class="widget widget-tile">
                    <div class="chart sparkline" id="spark2"><canvas style="display: inline-block; width: 81px; height: 35px; vertical-align: top;" width="81" height="35"></canvas></div>
                    <div class="data-info">
                        <div class="desc">Monthly Sales</div>
                        <div class="value"><span class="indicator indicator-positive mdi mdi-chevron-up"></span><span class="number" data-toggle="counter" data-end="80" data-suffix="%">80%</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 col-lg-6 col-xl-3">
                <div class="widget widget-tile">
                    <div class="chart sparkline" id="spark3"><canvas style="display: inline-block; width: 85px; height: 35px; vertical-align: top;" width="85" height="35"></canvas></div>
                    <div class="data-info">
                        <div class="desc">Impressions</div>
                        <div class="value"><span class="indicator indicator-positive mdi mdi-chevron-up"></span><span class="number" data-toggle="counter" data-end="532">532</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 col-lg-6 col-xl-3">
                <div class="widget widget-tile">
                    <div class="chart sparkline" id="spark4"><canvas style="display: inline-block; width: 85px; height: 35px; vertical-align: top;" width="85" height="35"></canvas></div>
                    <div class="data-info">
                        <div class="desc">Downloads</div>
                        <div class="value"><span class="indicator indicator-negative mdi mdi-chevron-down"></span><span class="number" data-toggle="counter" data-end="113">113</span>
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
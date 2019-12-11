<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="shortcut icon" href="{{ asset('img/logo-fav.png') }}">
    <title>{{ config('app.name', 'SHOR') }}</title>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('lib/perfect-scrollbar/css/perfect-scrollbar.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ asset('lib/material-design-icons/css/material-design-iconic-font.min.css') }}" />
    <style>
		.dt-buttons.btn-group {
			width: 25%;
		}
		.dataTables_wrapper .dataTables_filter {
			text-align: right;
			width: 75%;
			display: inline-block;
		}
		</style>
    @stack('styles')
    <link rel="stylesheet" href="{{ asset('css/beagle.css') }}" type="text/css" />
    <link rel="stylesheet" href="{{ asset('css/app.css') }}" type="text/css" />
</head>

<body>
    <div class="be-wrapper be-fixed-sidebar be-collapsible-sidebar be-collapsible-sidebar-hide-logo">
        {{-- Navbar --}}
        @includeIf('include.navbar-collapsible')
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
    @yield('modals')
    <script src="{{ asset('lib/jquery/jquery.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('lib/perfect-scrollbar/js/perfect-scrollbar.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('lib/bootstrap/dist/js/bootstrap.bundle.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('js/beagle.js') }}" type="text/javascript"></script>
    <script src="{{ asset('js/app.js') }}" type="text/javascript"></script>
    <script>
        if (window.screen.availWidth <= 1024) {
			if (!$('.be-wrapper').hasClass('be-collapsible-sidebar-collapsed')) {
				$('.be-wrapper').addClass('be-collapsible-sidebar-collapsed');
			}
		}
		$(window).on('resize', function () {
			if (window.screen.availWidth <= 1024) {
				if (!$('.be-wrapper').hasClass('be-collapsible-sidebar-collapsed')) {
					$('.be-toggle-left-sidebar').click();
				}
			} else {
				if ($('.be-wrapper').hasClass('be-collapsible-sidebar-collapsed')) {
					$('.be-toggle-left-sidebar').click();
				}
			}
        });
    </script>
    @stack('scripts')
</body>
</html>
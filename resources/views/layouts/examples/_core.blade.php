{{-- SOLO SE USA PARA LOS EJEMPLOS DE LAYOUTS --}}
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="shortcut icon" href="{{ asset('img/logo-fav.png') }}">
    <title>Beagle</title>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('lib/perfect-scrollbar/css/perfect-scrollbar.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ asset('lib/material-design-icons/css/material-design-iconic-font.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/beagle.css') }}" type="text/css" />
    @stack('styles')
</head>

<body class="{!! !empty($class) ? $class : '' !!}">
    @yield('layout')
    <script src="{{ asset('lib/jquery/jquery.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('lib/perfect-scrollbar/js/perfect-scrollbar.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('lib/bootstrap/dist/js/bootstrap.bundle.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('js/beagle.js') }}" type="text/javascript"></script>
    <script src="{{ asset('js/app.js') }}" type="text/javascript"></script>
    @stack('scripts')
</body>

</html>
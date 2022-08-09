<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!--Espacio para título de página-->
    <title>@yield('title_page')-SOL</title>

    <!-- Styles -->
    <!--link rel="stylesheet" href="{{ asset('css/app.css') }}"-->
    <link rel="stylesheet" href="{{ asset('css/custom.css') }}">


</head>
<body>
<!---->
{{ $slot }}

<!-- Scripts -->
<!--script src="{{ asset('js/app.js') }}" defer></script-->
<script src="{{ asset('bootstrap/dist/js/bootstrap.bundle.js') }}" defer></script>
</body>
</html>

<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!--Espacio para título de página-->
    <title>VDService9:@yield('title_page')</title>

    <!-- Scripts -->
    <script src="{{ asset('jquery/dist/jquery.min.js') }}"></script>
    <script src="{{ asset('@popperjs/core/dist/umd/popper.min.js') }}"></script>
    <script src="{{ asset('bootstrap/dist/js/bootstrap.js') }}"></script>

    <!-- Styles -->
    <link rel="stylesheet" href="{{ asset('custom.css') }}">
    <link rel="stylesheet" href="{{ asset('css.css') }}">
</head>

<body>
<!---->
{{ $slot }}


</body>
</html>

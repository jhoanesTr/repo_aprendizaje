<meta http-equiv="X-UA-Compatible" content="IE=edge">

<meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">

{{-- bootstrap y compilación de sass--}}
<link rel="stylesheet" href={{ asset('css/app.css')}}>

{{-- cualquier otra hoja de estilos se referencia aquí --}}
<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
{{-- <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons"> --}}

{{-- para especificar en página --}}
@yield('styles')

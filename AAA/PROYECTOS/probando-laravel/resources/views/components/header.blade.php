<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistema de Orientación de Laboral</title>
    <link rel="stylesheet" href="/AAA/PROYECTOS/probando-laravel/resources/css/style.css">
</head>
<body>
<header class="bg-primary bg-gradient">
    <nav class="navbar navbar-expand-md mx-md-5">
        <!--Usuario-->
        <div class="navbar-brand">
            <svg xmlns="http://www.w3.org/2000/svg" width="35" height="35" fill="currentColor" class="text-white" viewBox="0 0 16 16">
                <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0z"/>
                <path fill-rule="evenodd" d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8zm8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1z"/>
            </svg>
        </div>

        <div class="collapse navbar-collapse">
            <ul class="navbar-nav flex-row">
                <li class="nav-item">
                    <a href="/obra-jv/index.php" class="nav-link">Inicio</a>
                </li>
                <li class="nav-item">
                    <a href="/obra-jv/citas/index.php" class="nav-link">Citas</a>
                </li>
                <li class="nav-item">
                    <a href="/obra-jv/personas/index.php" class="nav-link">Personas</a>
                </li>
                <li class="nav-item">
                    <a href="/obra-jv/empresas/index.php" class="nav-link">Empresas</a>
                </li>
            </ul>
        </div>

        <!--Salir-->
        <ul class="navbar-nav flex-row-reverse">
            <li class="nav-item flex-row-reverse">
                <a href="/obra-jv/conexiones/exit.php" class="nav-link">Salir</a>
            </li>
        </ul>
    </nav>
</header>

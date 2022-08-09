<div class="container pt-2 d-flex justify-content-between">
    <h1 class="text-primary w-25 h2">@yield('titulo')</h1>
    <form class="d-flex" action="./busqueda.php" method="POST">

        <!-- Botón añadir nuevo -->
        <div class="mr-4">
            <a href="@yield('crear')" class="btn text-black mb-3 " alt="Engadir nova persoa">
                <svg xmlns="http://www.w3.org/2000/svg" width="23" height="23" fill="currentColor" class="bi bi-plus-circle" viewBox="0 0 16 16">
                    <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"/>
                    <path d="M8 4a.5.5 0 0 1 .5.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3A.5.5 0 0 1 8 4z"/>
                </svg>
            </a>
        </div>

        <!-- Buscador y botón buscar -->
        <div class="input-group mb-3 mx-2 w-6" alt="Búsqueda de personas">
            <input id="campo" name="campo" class="form-control" type="text" placeholder="Búsqueda" aria-label="Search">
            <input type="submit" id="enviar" name="enviar" value="Buscar" class="btn btn-primary text-white rounded-0">
        </div>
    </form>
    {{ $slot }}
</div>

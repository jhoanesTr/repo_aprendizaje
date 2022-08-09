<header class="bg-primary bg-gradient">
    <nav class="navbar navbar-expand-md mx-md-5">
        <!--Usuario-->
        <div class="navbar-brand">
            <svg xmlns="http://www.w3.org/2000/svg" width="35" height="35" fill="currentColor" class="text-white" viewBox="0 0 16 16">
                <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0z"/>
                <path fill-rule="evenodd" d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8zm8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1z"/>
            </svg>
        </div>

        <!--Menú-->
        <div class="collapse navbar-collapse py-2">
            <ul class="navbar-nav flex-row">
                <li class="nav-item">
                    <a href="{{ url('citas') }}" class="nav-link {{ request()->routeIs('citas') ? 'text-decoration-underline' : '' }}">CITAS</a>
                </li>
                <li class="nav-item">
                    <a href="{{ url('personas') }}" class="nav-link {{ request()->routeIs('personas') ? 'text-decoration-underline' : '' }}">PERSONAS</a>
                </li>
                <li class="nav-item">
                    <a href="{{ url('empresas') }}" class="nav-link {{ request()->routeIs('empresas') ? 'text-decoration-underline' : '' }}">EMPRESAS</a>
                </li>
                <li class="nav-item">
                    <a href="{{ url('informes') }}" class="nav-link {{ request()->routeIs('informes') ? 'text-decoration-underline' : '' }}">INFORMES</a>
                </li>
            </ul>
        </div>

        <!--Salir-->
        <ul class="navbar-nav flex-row-reverse">
            <li class="nav-item flex-row-reverse">
                <!--<a href="/obra-jv/conexiones/exit.php" class="nav-link">SALIR</a>-->
                <!--No funciona todavia-->
                <button type="submit" class="btn-secondary rounded-1 border-0 py-0 bg-gradient" >
                    <a href="{{ url ('login') }}" class="text-black px-2 nav-link align-items-center">
                        <p class="d-inline-flex m-0 pe-1">Salir</p>
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-box-arrow-right" viewBox="0 0 16 16">
                            <path fill-rule="evenodd" d="M10 12.5a.5.5 0 0 1-.5.5h-8a.5.5 0 0 1-.5-.5v-9a.5.5 0 0 1 .5-.5h8a.5.5 0 0 1 .5.5v2a.5.5 0 0 0 1 0v-2A1.5 1.5 0 0 0 9.5 2h-8A1.5 1.5 0 0 0 0 3.5v9A1.5 1.5 0 0 0 1.5 14h8a1.5 1.5 0 0 0 1.5-1.5v-2a.5.5 0 0 0-1 0v2z"/>
                            <path fill-rule="evenodd" d="M15.854 8.354a.5.5 0 0 0 0-.708l-3-3a.5.5 0 0 0-.708.708L14.293 7.5H5.5a.5.5 0 0 0 0 1h8.793l-2.147 2.146a.5.5 0 0 0 .708.708l3-3z"/>
                        </svg>
                    </a>
                </button>
            </li>
        </ul>
    </nav>
</header>

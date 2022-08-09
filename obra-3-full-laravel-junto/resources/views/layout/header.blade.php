<header class="bg-primary">

    <nav class="navbar navbar-expand-lg navbar-dark p-3" id="box">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo03"
            aria-controls="navbarTogglerDemo03" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <a class="navbar-brand" href="#">
            <svg xmlns="http://www.w3.org/2000/svg" width="35" height="35" fill="currentColor"
                class="bi bi-person-circle mx-2" viewBox="0 0 16 16">
                <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0z" />
                <path fill-rule="evenodd"
                    d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8zm8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1z" />
            </svg>
            {{ auth()->user()->name }}
        </a>

        <div class="collapse navbar-collapse text-uppercase" id="navbarTogglerDemo03">
            <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
                <li class="nav-item">
                    <a href="{{ route('index') }}"
                        class="nav-link {{ request()->is('index') ? 'active btn btn-outline-light' : '' }}">Inicio</a>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link">Axenda</a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('persoas.index') }}"
                        class="nav-link {{ request()->is('persoas*') ? 'active btn btn-outline-light' : '' }}">Persoas</a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('empresas.index') }}"
                        class="nav-link {{ request()->is('empresas*') ? 'active btn btn-outline-light' : '' }}">Empresas</a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('ofertas_formacion.index') }}"
                    class="nav-link {{ request()->is('ofertas_formacion*') ? 'active btn btn-outline-light' : '' }}">Ofertas</a>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link">Consultas</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('logout') }}"
                        onclick="event.preventDefault();
                          document.getElementById('logout-form').submit();">Saír</a>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none hidden">
                        @csrf
                        {{-- {{ csrf_field() }} --}}
                    </form>
                </li>
            </ul>

            <div class="input-group-append d-flex derecha">

                <div class="dropdown mx-1">
                    <button class="btn btn-outline-light dropdown-toggle" type="button" id="dropdownMenuButton"
                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Usabilidade
                    </button>
                    <div class="dropdown-menu p-3" aria-labelledby="dropdownMenuButton">
                        {{-- <a class="dropdown-item" href="#">Action</a>
                      <a class="dropdown-item" href="#">Another action</a>
                      <a class="dropdown-item" href="#">Something else here</a> --}}
                        <button type="button" class="btn bg-white p-1" id="aumentar">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor"
                                class="bi bi-fonts t" viewBox="0 0 16 16">
                                <path
                                    d="M12.258 3h-8.51l-.083 2.46h.479c.26-1.544.758-1.783 2.693-1.845l.424-.013v7.827c0 .663-.144.82-1.3.923v.52h4.082v-.52c-1.162-.103-1.306-.26-1.306-.923V3.602l.431.013c1.934.062 2.434.301 2.693 1.846h.479L12.258 3z">
                                </path>
                            </svg>
                        </button>

                        <button type="button" class="btn bg-white p-1 m-3 " id="disminuir">
                            <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="currentColor"
                                class="bi bi-fonts t" viewBox="0 0 16 16">
                                <path
                                    d="M12.258 3h-8.51l-.083 2.46h.479c.26-1.544.758-1.783 2.693-1.845l.424-.013v7.827c0 .663-.144.82-1.3.923v.52h4.082v-.52c-1.162-.103-1.306-.26-1.306-.923V3.602l.431.013c1.934.062 2.434.301 2.693 1.846h.479L12.258 3z">
                                </path>
                            </svg>
                        </button>

                        {{-- <a class="btn btn-outline-light" id="btn" aria-current="true">Color</a> --}}

                        <button type="button" class="btn btn-dark mb-3" id="btn"
                            aria-current="true">Color</button>

                        <button class="switch" id="switch">
                            <span><i class="material-icons luna ">brightness_2</i>
                                </i></span>
                            <span><i class="material-icons sol">brightness_5</i>
                                </i></i></span>
                        </button>
                    </div>
                </div>

                @if (Auth::check() && Auth::user()->is_admin)
                    <a type="button" href="{{ route('admin.index') }}" class="btn btn-warning text-white" aria-current="true">Panel
                        Admin</a>
                @endif
            </div>

        </div>
    </nav>
</header>

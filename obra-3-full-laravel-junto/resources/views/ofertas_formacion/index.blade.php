@extends('layout.app')

@section('title', ' | Panel Admin')

@section('content')

    <!-- Content Header (Page header) -->

    <div class="container mb-4">
        <nav class="navbar navbar-light my-4">
            <div class="container-fluid">
                <h3 class="text-secondary w-50" id="title"><b>OFERTAS de FORMACIÓN</b></h3>

                {{-- <form class="d-flex" action="{{ route('empresas.index') }}" method="GET">
                    <!-- BOTÓN ENGADIR NOVO -->
                    <div class="mr-4">
                        <a href="{{ route('empresas.create') }}" class="btn btn-white mb-3" alt="Engadir nova empresa">
                            <svg xmlns="http://www.w3.org/2000/svg" width="23" height="23" fill="currentColor"
                                class="bi bi-plus-circle" viewBox="0 0 16 16">
                                <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z" />
                                <path
                                    d="M8 4a.5.5 0 0 1 .5.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3A.5.5 0 0 1 8 4z" />
                            </svg></a>
                    </div>
                    <!-- BUSCADOR E BOTÓN BUSCAR -->
                    <div class="input-group mb-3 mx-2 w-6" alt="Búsqueda de empresas">
                        <input name="busqueda" class="form-control" type="text" placeholder="Búsqueda" aria-label="Search"
                            value={{ $busqueda }}>
                        <input type="submit" id="bus" name="enviar" value="Buscar"
                            class="btn btn-primary text-white rounded-0">
                    </div>
                </form> --}}
            </div>
        </nav>

        <div class="table-responsive">
            <table class="table table-striped table-hover">
                <thead>
                    <tr class="table-primary">
                        <th class="col">Empresa</th>
                        <th class="col">Posto</th>
                        <th class="col">Data de inicio</th>
                        <th class="col">Data de fin</th>
                        <th class="col">Prazas</th>
                    </tr>
                </thead>

                <tbody>
                    @foreach ($ofertas_formacions as $ofertas_formacion)
                    <tr>
                        <td>{{ $ofertas_formacion->empresa }}</td>
                        <td>{{ $ofertas_formacion->posto }}</td>
                        <td>{{ $ofertas_formacion->data_inicio }}</td>
                        <td>{{ $ofertas_formacion->data_fin }}</td>
                        <td>{{ $ofertas_formacion->num_prazas }}</td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>

        <div class="pagination">
            {{ $ofertas_formacions->links() }}
        </div>

        {{-- <div class="mt-4">
            <a href="{{ url('/admin/index') }}" class="btn btn-primary">VOLVER</a>
        </div> --}}

    </div>



    <!-- Content Footer (Page footer) -->

@stop

<x-layout>
    <!--Titulo de la página-->
    @section('title_page')
        Empresas
@endsection

<!--Header-->
    <x-header>
    </x-header>

    <!--Main-->
    <x-container>
        <!--Encabezado-->
        <x-container.encabezado>
            @section('titulo')
                Empresas
            @endsection

        <!--Boton crear-->
            @section('crear')
                {{ url('empresas/create') }}
            @endsection
        </x-container.encabezado>


        <!--Tabla-->
        <x-container.tabla>

            <!--Header Tabla-->
            @section('header-tabla')
                <th>ID</th>
                <th>Nombre</th>
                <th>Acciones</th>
            @endsection

        <!--Body Tabla-->
            @section('body-tabla')
                @foreach($empresas as $empresa)
                    <tr>
                        <td>{{ $empresa->ID }}</td>
                        <td>{{ $empresa->Nombre }}</td>

                        <!--Botones de acción-->
                        <x-accion>
                            <!--Dirección de editar-->
                        @section('editar')
                            {{ url('empresas/'.$empresa->ID.'/edit') }}
                        @endsection

                        <!--Borrar-->
                            <form action="{{ url('empresas/'.$empresa->ID) }}" method="post">
                                @csrf
                                {{ method_field('DELETE') }}
                                <button type="submit" onclick="return confirm('¿Estas seguro que quieres borrar a esta empresa? ')" value="Borrar" class="p-0 border-0">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash-fill" viewBox="0 0 16 16">
                                        <path d="M2.5 1a1 1 0 0 0-1 1v1a1 1 0 0 0 1 1H3v9a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V4h.5a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H10a1 1 0 0 0-1-1H7a1 1 0 0 0-1 1H2.5zm3 4a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 .5-.5zM8 5a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7A.5.5 0 0 1 8 5zm3 .5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 1 0z"/>
                                    </svg>
                                </button>
                            </form>
                        </x-accion>
                    </tr>
                @endforeach
            @endsection

        </x-container.tabla>

    </x-container>

    <!--Footer-->
    <x-footer>
    </x-footer>
</x-layout>

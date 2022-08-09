<x-layout>
    <!--Titulo de la página-->
    @section('title_page')
    Personas
    @endsection

    <!--Header-->
    <x-header>
    </x-header>

        <!--Main-->
        <x-container>
            <!--Encabezado-->
            <x-container.encabezado>
                @section('titulo')
                    Personas
                @endsection

                <!--Boton crear-->
                @section('crear')
                    {{ url('personas/create') }}
                @endsection
            </x-container.encabezado>


            <!--Tabla-->
            <x-container.tabla>

                <!--Header Tabla-->
                @section('header-tabla')
                    <th>ID</th>
                    <th>Nombre</th>
                    <th>1º Apellido</th>
                    <th>2º Apellido</th>
                    <th>DNI</th>
                    <th>Nacimiento</th>
                    <th>Sexo</th>
                    <th>CP</th>
                    <th>Teléfono</th>
                    <th>Correo</th>
                    <th>Acciones</th>
                @endsection

                <!--Body Tabla-->
                @section('body-tabla')
                    @foreach($personas as $persona)
                        <tr>
                            <td>{{ $persona->ID }}</td>
                            <td>{{ $persona->Nombre }}</td>
                            <td>{{ isset($persona->Apellido_Paterno)?$persona->Apellido_Paterno:'' }}</td>
                            <td>{{ isset($persona->Apellido_Materno)?$persona->Apellido_Materno:'' }}</td>
                            <td>{{ $persona->DNI }}</td>
                            <td>{{ $persona->FechaNacimiento }}</td>
                            <td>{{ $persona->Sexo }}</td>
                            <td>{{ $persona->CP }}</td>
                            <td>{{ $persona->Telefono }}</td><!--Podría ser opcional-->
                            <td>{{ $persona->email }}</td><!--Podría ser opcional-->
                            <!--Botones de acción-->
                            <x-accion>
                                <!--Dirección de editar-->
                                @section('editar')
                                    {{ url('personas/'.$persona->ID.'/edit') }}
                                @endsection

                                <!--Borrar-->
                                <form action="{{ url('personas/'.$persona->ID) }}" method="post">
                                    @csrf
                                    {{ method_field('DELETE') }}
                                    <button type="submit" onclick="return confirm('¿Estas seguro que quieres borrar a esta persona? ')" value="Borrar" class="p-0 border-0 text-primary">
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

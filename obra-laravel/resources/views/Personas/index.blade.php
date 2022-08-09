<x-layout>
    <!--Titulo de la página-->
    @section('title_page')
        Personas
    @endsection

<!--Header-->
    <x-header>
    </x-header>

    <!--Solo container-->
    <x-container.container>

        <!--Título, Buscador y Añadir nuevo-->
        <x-container.encabezado>

            <!--Titulo-->
            @section('titulo')
                Personas
            @endsection

            <!--Crear nueva persona-->
            @section('nuevo')
                {{ url('personas/create') }}
            @endsection

        </x-container.encabezado>

        <!--Tabla-->
        <x-container.tabla>

            <!--Header Tabla-->
            @section('tabla-header')
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
            @section('tabla-body')
                @foreach($personas as $persona)
                    <tr>
                        <td>{{ isset($persona->ID)?$persona->ID:'' }}</td>
                        <td>{{ $persona->Nombre }}</td>
                        <td>{{ $persona->Apellido_Paterno }}</td>
                        <td>{{ $persona->Apellido_Materno }}</td>
                        <td>{{ $persona->DNI }}</td>
                        <td>{{ $persona->FechaNacimiento }}</td>
                        <td>{{ $persona->Sexo }}</td>
                        <td>{{ $persona->CP }}</td>
                        <td>{{ $persona->Telefono }}</td>
                        <td>{{ $persona->email }}</td>
                        <td>
                            <!--Editar-->
                            <a href="{{ url('personas/'.$persona->ID.'/edit') }}">
                                Editar
                            </a>

                            <!--Borrar-->
                            <form action="{{ url('personas/'.$persona->ID) }}" method="post">
                                @csrf
                                {{ method_field('DELETE') }}
                                <input type="submit" onclick="return confirm('¿Estas seguro que quieres borrar a esta persona?')" value="Borrar">
                            </form>
                        </td>
                    </tr>
                @endforeach
            @endsection

            <!--Paginacion-->
        </x-container.tabla>
    </x-container.container>

    <!--Footer-->
    <x-footer>
    </x-footer>
</x-layout>

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
                <th>Sexo</th>
                <th>Nacimiento</th>
                <th>CP</th>
                <th>Teléfono</th>
                <th>Correo</th>
                <th>Acciones</th>
            @endsection

            <!--Body Tabla-->
            @section('tabla-body')
                <td>Jhoanes</td>
                <td>Villarroel</td>
                <td>Duran</td>
                <td>X8231801A</td>
                <td>M</td>
                <td>09/01/2002</td>
                <td>36203</td>
                <td>635158366</td>
                <td>jhoanes.ofv21@gmail.com</td>
                <td>x x x</td>
            @endsection

            <!--Paginacion-->
        </x-container.tabla>
    </x-container.container>

    <!--Footer-->
    <x-footer>
    </x-footer>
</x-layout>

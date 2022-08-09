<x-layout>
    <!--Titulo de la página-->
    @section('title_page')
        Empresas
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
                Empresas
            @endsection
        </x-container.encabezado>

        <!--Tabla-->
        <x-container.tabla>

            <!--Header Tabla-->
            @section('tabla-header')
                <th>Nombre</th>
                <th>Población</th>
                <th>Actividad</th>
                <th>Data de incorporación</th>
                <th>Teléfono</th>
                <th>Fax</th>
                <th>Acciones</th>
            @endsection

            <!--Body Tabla-->
            @section('tabla-body')
            @endsection

        </x-container.tabla>

    </x-container.container>

    <!--Footer-->
    <x-footer>
    </x-footer>
</x-layout>

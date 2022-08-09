<x-layout>
    <!--Titulo de la página-->
    @section('title_page')
        Citas
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
                Citas
            @endsection

            <!--Crear nueva persona-->
            @section('nuevo')
                {{ url('citas/create') }}
            @endsection
        </x-container.encabezado>

    </x-container.container>

    <!--Footer-->
    <x-footer>
    </x-footer>
</x-layout>

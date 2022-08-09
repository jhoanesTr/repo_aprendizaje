<x-layout>
    <!--Titulo de la página-->
    @section('title_page')
        NuevaPersona
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
                Nueva persona
            @endsection
        </x-container.encabezado>


    </x-container.container>

    <!--Footer-->
    <x-footer>
    </x-footer>
</x-layout>


<x-layout>
    <!--Titulo de la página-->
    @section('title_page')

    @endsection

    <!--Header-->
    <x-header>
    </x-header>

        <!--Main-->
        <x-container>
            <!--Encabezado-->
            <x-container.encabezado>
                @section('titulo')
                @endsection

                <!--Boton crear-->
                @section('crear')
                @endsection
            </x-container.encabezado>


            <!--Tabla-->
            <x-container.tabla>

                <!--Header Tabla-->
                @section('header-tabla')
                @endsection

                <!--Body Tabla-->
                @section('body-tabla')
                @endsection

            </x-container.tabla>

        </x-container>

    <!--Footer-->
    <x-footer>
    </x-footer>
</x-layout>

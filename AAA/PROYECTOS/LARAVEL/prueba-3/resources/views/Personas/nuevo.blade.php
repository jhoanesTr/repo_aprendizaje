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

        <!--Encabezado create-->
        <x-create.encabezado>
            @section('Nueva')
                persona
            @endsection
        </x-create.encabezado>


    </x-container.container>

    <!--Footer-->
    <x-footer>
    </x-footer>
</x-layout>

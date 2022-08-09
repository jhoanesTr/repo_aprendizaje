<x-layout>
    <!--Titulo de la página-->
@section('title_page')
Nueva empresa
@endsection

<!--Header-->
    <x-header>
    </x-header>

    <!--Main-->
    <x-container>
        <x-acciones.nuevo>
            <!--Titulo-->
            @section('nuevo')
                empresa a registrar
            @endsection

            <!--Cambiar de tab-->
            @section('tab-header')
                <button class="nav-link active" id="nav-generales-tab" data-bs-toggle="tab" data-bs-target="#nav-generales" type="button" role="tab" aria-controls="nav-generales" aria-selected="true">Generales</button>
                <button class="nav-link" id="nav-estudios-tab" data-bs-toggle="tab" data-bs-target="#nav-estudios" type="button" role="tab" aria-controls="nav-estudios" aria-selected="false">Estudios</button>
                <button class="nav-link" id="nav-experiencia-tab" data-bs-toggle="tab" data-bs-target="#nav-experiencia" type="button" role="tab" aria-controls="nav-experiencia" aria-selected="false">Experiencia</button>
            @endsection

            <!--Direccion del formulario-->
            @section('post')
                {{ url('/empresas') }}
            @endsection

        <!--Formulario-->
            <x-acciones.empresas>

            </x-acciones.empresas>
        </x-acciones.nuevo>
    </x-container>

    <!--Footer-->
    <x-footer>
    </x-footer>
</x-layout>

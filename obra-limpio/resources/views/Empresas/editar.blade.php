<x-layout>
    <!--Titulo de la página-->
@section('title_page')
Editar empresa
@endsection

<!--Header-->
    <x-header>
    </x-header>

    <!--Main-->
    <x-container>
        <x-acciones.editar>
            @section('editar')
            empresa a modificar
            @endsection

            <!--Cambiar de tab-->
            @section('tab-header')
                <button class="nav-link active" id="nav-generales-tab" data-bs-toggle="tab" data-bs-target="#nav-generales" type="button" role="tab" aria-controls="nav-generales" aria-selected="true">Generales</button>
                <button class="nav-link" id="nav-estudios-tab" data-bs-toggle="tab" data-bs-target="#nav-estudios" type="button" role="tab" aria-controls="nav-estudios" aria-selected="false">Estudios</button>
                <button class="nav-link" id="nav-experiencia-tab" data-bs-toggle="tab" data-bs-target="#nav-experiencia" type="button" role="tab" aria-controls="nav-experiencia" aria-selected="false">Experiencia</button>
            @endsection

            <!--Direccion del formulario-->
            @section('post')
                {{ url('/empresas/'.$empresa->ID) }}
            @endsection

            <!--Formulario-->
                <div class="tab-content" id="nav-tabContent">
                    <div class="tab-pane fade show active" id="nav-generales" role="tabpanel" aria-labelledby="nav-home-tab">
                        <!--Obligatorio-->
                        <div class="row">
                            <div class="col-xl-3">
                                <label for="Nombre" class="form-label ">Nombre:</label>
                                <input type="text" class="form-control" name="Nombre" id="Nombre" value="{{ isset($empresa->Nombre)?$empresa->Nombre:'' }}" required>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="d-flex justify-content-end align-items-center pt-2">
                    <!--Volver-->
                    <a href="{{ url('empresas') }}" class="text-decoration-none pe-2">Volver</a>

                    <!--Guardar-->
                    <button type="submit" class="btn btn-secondary ">
                        Guardar
                    </button>
                </div>
        </x-acciones.editar>
    </x-container>

    <!--Footer-->
    <x-footer>
    </x-footer>
</x-layout>

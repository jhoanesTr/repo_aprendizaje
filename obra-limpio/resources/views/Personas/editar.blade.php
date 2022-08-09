<x-layout>
    <!--Titulo de la página-->
@section('title_page')
Editar persona
@endsection

<!--Header-->
    <x-header>
    </x-header>

    <!--Main-->
    <x-container>
        <x-acciones.editar>
        @section('editar')
        persona a modificar
        @endsection

        <!--Cambiar de tab-->
        @section('tab-header')
            <button class="nav-link active" id="nav-generales-tab" data-bs-toggle="tab" data-bs-target="#nav-generales" type="button" role="tab" aria-controls="nav-generales" aria-selected="true">Generales</button>
            <button class="nav-link" id="nav-estudios-tab" data-bs-toggle="tab" data-bs-target="#nav-estudios" type="button" role="tab" aria-controls="nav-estudios" aria-selected="false">Estudios</button>
            <button class="nav-link" id="nav-experiencia-tab" data-bs-toggle="tab" data-bs-target="#nav-experiencia" type="button" role="tab" aria-controls="nav-experiencia" aria-selected="false">Experiencia</button>
        @endsection

        <!--Direccion del formulario-->
        @section('post')
            {{ url('/personas/'.$persona->ID) }}
        @endsection

        <!--Formulario-->
            <div class="tab-content" id="nav-tabContent">
                <div class="tab-pane fade show active" id="nav-generales" role="tabpanel" aria-labelledby="nav-home-tab">
                    <!--Obligatorio-->
                    <div class="row">
                        <div class="col-xl-3">
                            <label for="Nombre" class="form-label ">Nombre:</label>
                            <input type="text" class="form-control" name="Nombre" id="Nombre" value="{{ isset($persona->Nombre)?$persona->Nombre:'' }}" required>
                        </div>

                        <div class="col-xl-3">
                            <label for="Apellido_Paterno" class="form-label">1º Apellido:</label>
                            <input type="text" class="form-control" name="Apellido_Paterno" id="Apellido_Paterno" value="{{ isset($persona->Apellido_Paterno)?$persona->Apellido_Paterno:''}}">
                        </div>

                        <div class="col-xl-3">
                            <label for="Apellido_Materno" class="form-label">2º Apellido:</label>
                            <input type="text" class="form-control" name="Apellido_Materno" id="Apellido_Materno" value="{{ isset($persona->Apellido_Materno)?$persona->Apellido_Materno:'' }}">
                        </div>

                        <div class="col-xl-3">
                            <label for="DNI" class="form-label">DNI:</label>
                            <input type="text" class="form-control" name="DNI" id="DNI" value="{{ isset($persona->DNI)?$persona->DNI:'' }}" required>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xl-4">
                            <label for="FechaNacimiento" class="form-label">Fecha de nacimiento:</label>
                            <input type="date" class="form-control" name="FechaNacimiento" id="FechaNacimiento" value="{{ isset($persona->FechaNacimiento)?$persona->FechaNacimiento:'' }}" required>
                        </div>
                        <div class="col-xl-3">
                            <label for="Sexo" class="form-label">Sexo:</label>
                            <!--select name="Sexo" id="Sexo" class="form-select-sm" required>
                                <option selected disabled>Elegir un sexo</option>
                                <option value="Masculino">Masculino</option>
                                <option value="Femenino">Femenino</option>
                                <option value="No definido">No definido</option>
                            </select-->
                            <input type="text" class="form-control" name="Sexo" id="Sexo"  value="{{ isset($persona->Sexo)?$persona->Sexo:'' }}" required><!--modificar-->
                        </div>

                        <div class="col-xl-2">
                            <label for="CP" class="form-label">CP:</label>
                            <input type="number" class="form-control" name="CP" id="CP" value="{{ isset($persona->CP)?$persona->CP:'' }}" required>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-xl-3">
                            <label for="Telefono" class="form-label">Teléfono:</label>
                            <input type="tel" class="form-control" name="Telefono" id="Telefono" value="{{ isset($persona->Telefono)?$persona->Telefono:'' }}" required>
                        </div>
                        <div class="col-xl-5">
                            <label for="email" class="form-label">Email:</label>
                            <input type="email" class="form-control" name="email" id="email" value="{{ isset($persona->email)?$persona->email:'' }}" required>
                        </div>
                    </div>
                </div>
                <!--Fin Obligatorio-->

                <!--Estudios-->
            <!--form action="" method="post" class="container bg-light rounded-3 py-4 px-4">
        @csrf-
        <div class="tab-pane fade show" id="nav-estudios" role="tabpanel" aria-labelledby="nav-estudios-tab">
            <label for="Estudios" class="form-label">Nivel de estudios</label>
            <input type="text" class="form-control" name="Estudios" id="Estudios" value="{{ isset($persona->Nombre)?$persona->Nombre:'' }}">
        </div>
    </form-->
                <!--Fin Estudios-->

                <!--Experiencia-->
            <!--div class="tab-pane fade show" id="nav-experiencia" role="tabpanel" aria-labelledby="nav-experiencia-tab">
        <label for="Experiencia" class="form-label">Experiencia</label>
        <input type="text" class="form-control" name="Experiencia" id="Experiencia" value="{{ isset($persona->Nombre)?$persona->Nombre:'' }}">
    </div-->
                <!--Fin Estudios-->
            </div>
            <div class="d-flex justify-content-end align-items-center pt-2">
                <!--Volver-->
                <a href="{{ url('personas') }}" class="text-decoration-none pe-2">Volver</a>

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

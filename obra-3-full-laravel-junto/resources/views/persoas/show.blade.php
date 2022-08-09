@extends('layout.app')

@section('title', ' | Persoas Ficha')

@section('content')

    <!-- Content Header (Page header) -->
    {{-- <div class="container my-5">
        <div class="d-flex justify-content-end gap-4">
            <a href="{{ url('/persoas/index') }}" class="btn btn-primary">VOLVER ATRÁS</a>
            <a href="{{ route('persoas.edit', $persoas->id) }}"><button class="btn btn-warning">EDITAR REXISTRO</button></a>
            <form action="{{ route('persoas.destroy', $persoas->id) }}" method="POST">
                @csrf
                {{ method_field('DELETE') }}
                <button class="btn btn-danger" onclick="return EliminarRegistro('Eliminar Persoa')">ELIMINAR REXISTRO</button>
            </form>
        </div>
    </div> --}}
    <div class="input-group-append my-2 ">
        <div class="d-flex justify-content-end gap-1 mx-5">
            <a href="{{ url('/persoas/index') }}" class="btn btn-outline-primary" title="Volver">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-backspace"
                    viewBox="0 0 16 16">
                    <path d="M5.83 5.146a.5.5 0 0 0 0 .708L7.975 8l-2.147 2.146a.5.5 0 0 0 .707.708l2.147-2.147 2.146 2.147a.5.5 0 0 0 .707-.708L9.39 8l2.146-2.146a.5.5 0 0 0-.707-.708L8.683 7.293 6.536 5.146a.5.5 0 0 0-.707 0z" />
                    <path d="M13.683 1a2 2 0 0 1 2 2v10a2 2 0 0 1-2 2h-7.08a2 2 0 0 1-1.519-.698L.241 8.65a1 1 0 0 1 0-1.302L5.084 1.7A2 2 0 0 1 6.603 1h7.08zm-7.08 1a1 1 0 0 0-.76.35L1 8l4.844 5.65a1 1 0 0 0 .759.35h7.08a1 1 0 0 0 1-1V3a1 1 0 0 0-1-1h-7.08z" />
                </svg></a>
            <a href="{{ route('persoas.edit', $persoas->id) }}"><button class="btn btn-outline-secondary" title="Editar">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                        class="bi bi-pencil" viewBox="0 0 16 16">
                        <path d="M12.146.146a.5.5 0 0 1 .708 0l3 3a.5.5 0 0 1 0 .708l-10 10a.5.5 0 0 1-.168.11l-5 2a.5.5 0 0 1-.65-.65l2-5a.5.5 0 0 1 .11-.168l10-10zM11.207 2.5 13.5 4.793 14.793 3.5 12.5 1.207 11.207 2.5zm1.586 3L10.5 3.207 4 9.707V10h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.293l6.5-6.5zm-9.761 5.175-.106.106-1.528 3.821 3.821-1.528.106-.106A.5.5 0 0 1 5 12.5V12h-.5a.5.5 0 0 1-.5-.5V11h-.5a.5.5 0 0 1-.468-.325z" />
                    </svg></button></a>
            <form action="{{ route('persoas.destroy', $persoas->id) }}" method="POST">
                @csrf
                {{ method_field('DELETE') }}
                <button class="btn btn-outline-danger" title="Eliminar"
                    onclick="return EliminarRegistro('Eliminar Persoa')">
                    <svg xmlns="http://www.w3.org/2000/svg" alt="Eliminar rexistro" width="16" height="16"
                        fill="currentColor" class="bi bi-trash" viewBox="0 0 16 16">
                        <path d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6z" />
                        <path fill-rule="evenodd" d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1zM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118zM2.5 3V2h11v1h-11z" />
                    </svg></button>
            </form>
        </div>
    </div>

    <div class="container-fluid px-md-5 my-1">
        <!-- TABS -->
        <!-- TABS MENÚ-->
        <ul class="nav nav-tabs" id="myTab" role="tablist">
            <li class="nav-item w-auto" role="presentation">
                <button class="nav-link active" id="home-tab" data-bs-toggle="tab" data-bs-target="#datospersoais"
                    type="button" role="tab" aria-controls="home" aria-selected="true">Datos persoais</button>
            </li>
            <li class="nav-item w-auto" role="presentation">
                <button class="nav-link" id="profile-tab" data-bs-toggle="tab" data-bs-target="#formacion" type="button"
                    role="tab" aria-controls="profile" aria-selected="false">Formación</button>
            </li>
            <li class="nav-item w-auto" role="presentation">
                <button class="nav-link" id="contact-tab" data-bs-toggle="tab" data-bs-target="#experiencia" type="button"
                    role="tab" aria-controls="contact" aria-selected="false">Experiencia</button>
            </li>
            <li class="nav-item w-auto" role="presentation">
                <button class="nav-link" id="contact-tab" data-bs-toggle="tab" data-bs-target="#ofertas" type="button"
                    role="tab" aria-controls="contact" aria-selected="false">Ofertas</button>
            </li>
        </ul>


        <!-- CONTIDOS TABS -->
        <div class="tab-content" id="myTabContent">
            <div class="tab-pane fade py-3 px-4 show active" id="datospersoais" role="tabpanel"
                aria-labelledby="datospersoais-tab">
                <!-- DATOS PERSOAIS -->
                <div class="container">
                    <div class="row align-items-start my-3">
                        <div class="col p-2 me-lg-4 bd-highlight text-start">
                            <p id="id" class="visually-hidden">{{ $persoas->id }}</p>
                            <p class="flex-md-wrap"><span class="opacity-50">NOME:</span><span class="text-nowrap">
                                    {{ $persoas->nome }}</span></p>
                            <p class="flex-md-wrap"><span class="opacity-50">1º APELIDO:</span>
                                {{ $persoas->primeiro_apelido }}</p>
                            <p class="flex-md-wrap"><span class="opacity-50">2º APELIDO:</span>
                                {{ $persoas->segundo_apelido }}</p>
                        </div>

                        <div class="col p-2 me-lg-4 bd-highlight text-start">
                            <p class="text-nowrap"><span class="opacity-50">DNI/NIF:</span> {{ $persoas->nif }}</p>
                            <p class="flex-md-wrap"><span class="opacity-50">DATA DE NACEMENTO:</span> <span
                                    class="text-nowrap">{{ $persoas->data_nacemento }}</span></p>
                            <p class="text-nowrap"><span class="opacity-50">SEXO:</span> {{ $persoas->sexo }} </p>
                        </div>

                        <div class="col p-2 me-lg-4 bd-highlight text-start">
                            <p class="text-nowrap"><span class="opacity-50">TELÉFONO:</span> {{ $persoas->telefono }}
                            </p>
                            <p class="flex-md-nowrap"><span class="opacity-50">CORREO ELECTRÓNICO:</span>
                                {{ $persoas->email }}</p>
                            <p class="text-nowrap"><span class="opacity-50">CP:</span> {{ $persoas->codigo_postal }}
                            </p>
                        </div>
                    </div>

                    <div class="row align-items-start my-3">
                        <p class="lead text-uppercase opacity-50">Accións</p>
                        <div class="col">
                            <p class="text-nowrap"><span class="opacity-50">DATA DA 1ª ENTREVISTA:</span>
                                <?php // echo $row['data_p_cita'];
                                ?>
                            <p class="text-nowrap"><span class="opacity-50">ORIENTADOR/A:</span> <?php // echo $row['orientador_p_cita'];
                            ?>
                            <p class="text-nowrap"><span class="opacity-50">CANLE DE ACCESO:</span> <?php // echo $row['orientador_p_cita'];
                            ?>
                        </div>
                        <div class="col">
                            <p class="text-nowrap"><span class="opacity-50">SEGUIMENTO:</span> <?php // echo $row['orientador_p_cita'];
                            ?>
                            <p class="text-nowrap"><span class="opacity-50">ACCIÓNS DO SOL:</span> <?php // echo $row['orientador_p_cita'];
                            ?>
                            <p class="text-nowrap"><span class="opacity-50">NOTAS E CONSIDERACIÓNS</span>
                                <?php // echo $row['orientador_p_cita'];
                                ?>
                        </div>
                    </div>
                    {{-- <div class="my-4">
                        <div class="col-sm-offset-2 col-sm-10">
                            <a href="{{ url('/persoas/index') }}" class="btn btn-primary">VOLVER</a>
                        </div>
                    </div> --}}
                </div>

            </div>

            <!-- FORMACIÓN -->
            <div class="tab-pane fade py-3 px-4" id="formacion" role="tabpanel" aria-labelledby="formacion-tab">
                <div class="d-flex flex-wrap">
                    <div class="col-md-4 my-2">
                        <label for="estudo" class="control-label">ESTUDOS BÁSICOS:</label>
                        <div class="col-md-10">
                            <select class="form-control" id="estudos" name="estudos">
                                <option value="text" disabled selected hidden>Formación Básica</option>
                                <option value="ESO">E.S.O</option>
                                <option value="COU">C.O.U</option>
                            </select>
                        </div>
                    </div>

                    <div class="col-md-4 my-2">
                        <label for="superiores" class="control-label">ESTUDOS SUPERIORES:</label>
                        <div class="col-md-10">
                            <select class="form-control" id="superiores" name="superiores">
                                <option value="text" disabled selected hidden>Formación Superior</option>
                                <option value="uni">Universitarios</option>
                                <option value="nouni">Non Universitarios</option>
                            </select>
                        </div>
                    </div>

                    <div class="col-md-4 my-2">
                        <label for="universitarios" class="control-label">UNIVERSITARIOS:</label>
                        <div class="col-md-10">
                            <select class="form-control" id="universitarios" name="universitarios">
                                <option value="text" disabled selected hidden>Estudos Universitarios</option>
                                <option value="grao">Grao</option>
                                <option value="master">Master</option>
                                <option value="master">Doutorado</option>
                            </select>
                        </div>
                    </div>

                    <div class="col-md-4 my-2">
                        <label for="non-universitarios" class="control-label">NON UNIVERSITARIOS: </label>
                        <div class="col-md-10">
                            <select class="form-control" id="non-universitarios" name="nonuniversitarios">
                                <option value="text" disabled selected hidden>Outros</option>
                                <option value="bacharelato">Bacharelato</option>
                                <option value="formacion-profesional">Formación Profesional</option>
                            </select>
                        </div>
                    </div>

                    <div class="col-md-4 my-2">
                        <label for="fp" class="control-label">FORMACIÓN PROFESIONAL:</label>
                        <div class="col-md-10">
                            <select class="form-control" id="formacion" name="formacion">
                                <option value="text" disabled selected hidden>Formación Profesional</option>
                                <option value="superior">Superior</option>
                                <option value="media">Media</option>
                                <option value="basica">Básica</option>
                            </select>
                        </div>
                    </div>

                    <div class="col-md-4 my-2">
                        <label for="familias" class="control-label">FAMILIAS PROFESIONAIS:</label>
                        <div class="col-md-10">
                            <select class="form-control" id="familias" name="familias">
                                <option value="text" disabled selected hidden>Familias profesionais</option>
                                <option value="informatica">Informática e comunicacións</option>
                                <option value="admin">Administración e Xestión</option>
                                <option value="madeira">Madeira, moble e corcho</option>
                                <option value="auga">Enerxía e auga</option>
                                <option value="imaxe">Imaxe persoal</option>
                            </select>
                        </div>
                    </div>

                    <div class="col-md-4 my-2">
                        <label for="complementaria" class="control-label">FORMACIÓN COMPLEMENTARIA:</label>
                        <div class="col-md-10">
                            <select class="form-control" id="complementaria" name="complementaria">
                                <option value="text" disabled selected hidden>Formación Complementaria</option>
                                <option value="certificados">Certificados Oficiais</option>
                                <option value="curso">Curso Manipulador de Alimentos</option>
                            </select>
                        </div>
                    </div>

                    <div class="col-md-4 my-2">
                        <label for="idiomas" class="control-label">IDIOMAS:</label>
                        <div class="col-md-10">
                            <select class="form-control" id="idiomas" name="idiomas">
                                <option label="Niveis">
                                <option value="text" disabled selected hidden>Niveis</option>
                                <option value="B1">B1</option>
                                <option value="B2">B2</option>
                                </option>
                            </select>

                            <select class="form-control" id="idiomas" name="idiomas">
                                <option label="Curso">
                                <option value="text" disabled selected hidden>Certificación</option>
                                <option value="text">Cambridge</option>
                                <option value="text">Oxford</option>
                                </option>
                            </select>
                        </div>
                    </div>

                    <div class="col-md-4 my-2">
                        <label for="otros" class="control-label">OUTROS:</label>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="checkbox1">
                            <label class="form-check-label" for="defaultCheck">Viviu no estranxeiro</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="checkbox2">
                            <label class="form-check-label" for="defaultCheck">Homologado</label>
                            <!-- <label>Homologado</label> -->
                            <!-- <input class="form-check-input" type="checkbox" value="" id="defaultCheck1"> Si
                    <input class="form-check-input" type="checkbox" value="" id="defaultCheck2"> Non -->
                        </div>
                    </div>
                    <div class="form-group col-md-4 my-2">
                        <label for="exampleFormControlTextarea">NOTAS E CONSIDERACIÓNS:</label>
                        <textarea class="form-control" id="exampleFormControlTextarea" rows="3"></textarea>
                    </div>
                </div>
                {{-- <div class="my-4">
                    <div class="col-sm-offset-2 col-sm-10">
                        <a href="{{ url('/persoas/index') }}" class="btn btn-primary">VOLVER</a>
                    </div>
                </div> --}}
            </div><!-- end tab formacion -->


            <!-- EXPERIENCIA -->
            <div class="tab-pane fade py-3 px-4" id="experiencia" role="tabpanel" aria-labelledby="experiencia-tab">
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptate, debitis rerum quod eligendi minima
                impedit provident magnam distinctio omnis. Ullam ducimus nobis architecto dolorum officiis cupiditate veniam
                nihil molestiae iusto.
                {{-- <div class="my-4">
                    <div class="col-sm-offset-2 col-sm-10">
                        <a href="{{ url('/persoas/index') }}" class="btn btn-primary">VOLVER</a>

                    </div>
                </div> --}}

            </div>

            <!-- OFERTAS -->
            <div class="tab-pane fade py-3 px-4" id="ofertas" role="tabpanel" aria-labelledby="ofertas-tab">

                <div class="container section">
                    <div class="row">
                        <div class="col-md-3">
                            <!-- CARD #1 -->
                            <div class="card py-3 px-2">
                                <h4 class="h5 card-title">TIPO DE OFERTA: <span> Contratación</span></h4>
                                <p class="card-text m-0">EMPRESA: <span>A quesexa</span></p>
                                <p class="card-text m-0">POSTO: <span>Capataz</span></p>
                                <p class="card-text">DATA: <span>12-03-2020</span></p>
                                <a href="#" class="link-btn">Ver oferta</a>
                            </div>
                        </div>
                    </div>
                    {{-- <div class="my-4">
                        <div class="col-sm-offset-2 col-sm-10">
                            <a href="{{ url('/persoas/index') }}" class="btn btn-primary">VOLVER</a>
                        </div>
                    </div> --}}
                </div>

            </div>
        </div>
    </div>

    <script>
        function EliminarRegistro(value) {
            action = confirm(value) ? true : event.preventDefault()
        }
    </script>
    <!-- Content Footer (Page footer) -->

@stop

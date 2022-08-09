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

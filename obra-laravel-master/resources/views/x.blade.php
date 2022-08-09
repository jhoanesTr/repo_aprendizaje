<form class="d-flex" action="{{ route('empresas.index') }}" method="GET">
    <!-- BUSCADOR E BOTÓN BUSCAR -->
    <div class="input-group mb-3 mx-2 w-6" alt="Búsqueda de empresas">
        <select name="buscar_por" id="id_buscar_por">
            <option value="">Buscar por</option>
            <option value="nome">Nombre</option>
            <option value="">Apellido</option>
            <option value="">Orientador</option>
        </select>
        <input name="buscar" class="form-control" type="search" placeholder="Búsqueda" aria-label="Search">
        <input type="submit" id="enviar" name="enviar" value="Buscar" class="btn btn-primary text-white rounded-0">
    </div>
</form>
@foreach( $empresas as $empresa)
{{ $empresa->nome }} <br>
@endforeach
<hr>

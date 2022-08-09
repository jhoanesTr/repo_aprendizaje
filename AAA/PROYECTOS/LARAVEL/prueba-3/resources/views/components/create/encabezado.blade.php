<div class="container">
    <h2 class="text-center">Nueva @yield('Nueva')</h2>

    <div class="container-fluid">
        <form action="" method="post">
            <label for="Nuevo_nombre">Nombre:</label>
            <input type="text" name="Nuevo_nombre">

            <label for="Nuevo_apellidoPaterno">1º Apellido:</label>
            <input type="text" name="Nuevo_apellidoPaterno">

            <label for="Nuevo_apellidoMaterno">2º Apellido:</label>
            <input type="text" name="Nuevo_apellidoMaterno">

            <label for="Nuevo_DNI">DNI:</label>
            <input type="text" name="Nuevo_DNI">

            <label for="Nuevo_fechaNacimiento">Fecha de nacimiento:</label>
            <input type="date" name="Nuevo_fechaNacimiento">

            <label for="Nuevo_sexo">Sexo:</label>
            <input type="text" name="Nuevo_sexo" id="Nuevo_sexo"><!--modificar-->

            <label for="Nuevo_cp">CP:</label>
            <input type="number" name="Nuevo_cp">

            <label for="Nuevo_telefono">Teléfono:</label>
            <input type="tel" name="Nuevo_telefono">

            <label for="Nuevo_email">Email:</label>
            <input type="email" name="Nuevo_email">

            <button type="submit">
                OK
            </button>

        </form>
    </div>
</div>

<x-layout>
    <!--Titulo de la página-->
    @section('title_page')
        Crear Persona
    @endsection
    <form action="{{ url('/personas') }}" method="post">
        @csrf
        <label for="Nombre">Nombre:</label>
        <input type="text" name="Nombre">

        <label for="Nuevo_apellidoPaterno">1º Apellido:</label>
        <input type="text" name="Apellido_Paterno">

        <label for="Nuevo_apellidoMaterno">2º Apellido:</label>
        <input type="text" name="Apellido_Materno">

        <label for="Nuevo_DNI">DNI:</label>
        <input type="text" name="DNI">

        <label for="Nuevo_fechaNacimiento">Fecha de nacimiento:</label>
        <input type="date" name="FechaNacimiento">

        <label for="Nuevo_sexo">Sexo:</label>
        <input type="text" name="Sexo" id="Nuevo_sexo"><!--modificar-->

        <label for="Nuevo_cp">CP:</label>
        <input type="number" name="CP">

        <label for="Nuevo_telefono">Teléfono:</label>
        <input type="tel" name="Telefono">

        <label for="Nuevo_email">Email:</label>
        <input type="email" name="email">

        <button type="submit">
            OK
        </button>

    </form>



</x-layout>


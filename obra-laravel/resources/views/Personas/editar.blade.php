<x-layout>
    <!--Titulo de la página-->
    @section('title_page')
        Editar Persona
    @endsection
    <x-header></x-header>
        <x-container.container>
            <x-create.container>


    <form action="{{ url('/personas/'.$persona->ID) }}" method="post">
        @csrf
        {{ method_field('PATCH') }}
        <label for="Nombre">Nombre:</label>
        <input type="text" name="Nombre" value="{{ $persona->Nombre }}">

        <label for="Nuevo_apellidoPaterno">1º Apellido:</label>
        <input type="text" name="Apellido_Paterno" value="{{ $persona->Apellido_Paterno }}">

        <label for="Nuevo_apellidoMaterno">2º Apellido:</label>
        <input type="text" name="Apellido_Materno" value="{{ $persona->Apellido_Materno }}">

        <label for="Nuevo_DNI">DNI:</label>
        <input type="text" name="DNI" value="{{ $persona->DNI }}">

        <label for="Nuevo_fechaNacimiento">Fecha de nacimiento:</label>
        <input type="date" name="FechaNacimiento" value="{{ $persona->FechaNacimiento }}">

        <label for="Nuevo_sexo">Sexo:</label>
        <input type="text" name="Sexo" id="Nuevo_sexo" value="{{ $persona->Sexo }}"><!--modificar-->

        <label for="Nuevo_cp">CP:</label>
        <input type="number" name="CP" value="{{ $persona->CP }}">

        <label for="Nuevo_telefono">Teléfono:</label>
        <input type="tel" name="Telefono" value="{{ $persona->Telefono }}">

        <label for="Nuevo_email">Email:</label>
        <input type="email" name="email" value="{{ $persona->email }}">

        <button type="submit">
            OK
        </button>
        <a href="{{ url('personas') }}">Volver</a>

    </form>
            </x-create.container>
        </x-container.container>
<x-footer></x-footer>
</x-layout>

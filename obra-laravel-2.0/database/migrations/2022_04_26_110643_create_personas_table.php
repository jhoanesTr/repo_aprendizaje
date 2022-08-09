<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePersonasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('personas', function (Blueprint $table) {
            $table->id('ID');

            $table->string('Nombre', 50);
            $table->string('Apellido_Paterno', 50);
            $table->string('Apellido_Materno', 50);
            $table->string('DNI')->unique();
            $table->date('FechaNacimiento');
            $table->enum('Sexo', ['Masculino', 'Femenino', 'No definido']);
            $table->string('CP', 5);
            $table->string('Telefono',15);
            $table->string('email', 70);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('personas');
    }
}

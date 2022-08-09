<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Personas extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('personas', function (Blueprint $table){
            $table->bigIncrements('ID');
            $table->string('Nombre', 50);
            $table->string('primer_Apellido', 50);
            $table->string('segundo_Apellido', 50);
            $table->string('DNI', 10);
            $table->date('FechaDeNacimiento');
            $table->string('Sexo', 10);
            $table->integer('CP');
            $table->string('Telefono',15);
            $table->string('Email', 80);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}

<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class EmSeguimiento extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('em_seguimiento', function (Blueprint $table){
            $table->engine = "InnoDB";
            $table->bigIncrements('id');
            $table->bigInteger('id_empresa')->nullable();
            $table->string('contacto');
            $table->string('funcionario');
            $table->string('motivo');
            $table->string('situacion');
            $table->timestamps();


        });
        Schema::table('em_seguimiento', function (Blueprint $table){
            $table->foreign('id_empresa')->references('id')
                ->on('empresas')
                ->onDelete('cascade');
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

<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //Schema::create('users', function (Blueprint $table) {
        //    $table->id();
        //    $table->string('name');
        //    $table->string('email')->unique();
        //    $table->timestamp('email_verified_at')->nullable();
        //    $table->string('password');
        //    $table->rememberToken();
        //    $table->timestamps();
        //});
        Schema::create('usuarios1', function (Blueprint $table){
            #ID int autoIncrement unsigned primaryKey
            $table->Integer('ID', 1, 1);

            $table->string('Nombre', 30);
            $table->string('DNI', 10);
            $table->string('Username', 50);
            $table->string('Contraseña', 50);
            $table->boolean('Bloqueado');

            #No se que es
            $table->rememberToken();
            $table->timestamp();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //Schema::dropIfExists('users');
        Schema::dropIfExists('usuarios1');
    }
}

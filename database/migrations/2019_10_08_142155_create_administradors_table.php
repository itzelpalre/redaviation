<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAdministradorsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('administradors', function (Blueprint $table) {
          $table->increments('id');
          $table->string('nombre');
          $table->string('correo');
          $table->integer('telefono');
          $table->string('usuario');
          $table->string('contraseña');
          $table->string('perfil');
          $table->boolean('activo');
          $table->string('owner');
          $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('administradors');
    }
}

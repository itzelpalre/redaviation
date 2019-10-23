<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOtsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ots', function (Blueprint $table) {
          $table->increments('id');
          $table->string('numeroOt');
          $table->date('fechaAlta');
          $table->string('companiaSolicitaServicio');
          $table->string('tipoAeronave');
          $table->string('matricula');
          $table->string('modelo');
          $table->string('numeroSerie');
          $table->string('hangar');
          $table->string('ttMotor1');
          $table->string('ttMotor2');
          $table->string('numeroParteMotor1');
          $table->string('numeroParteMotor2');
          $table->string('numeroSerieMotor1');
          $table->string('numeroSerieMotor2');
          $table->string('numeroSeriePlaneador');
          $table->string('ttPlaneador');
          $table->string('ciclosTotales');
          $table->string('observaciones');
          $table->string('horasTrabajoEstimadas');
          $table->string('reporte');
          $table->date('fechaInicio');
          $table->string('origenReporte');
          $table->string('estatus');
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
        Schema::dropIfExists('ots');
    }
}

@extends('ots.otingenieria.base')

@section('title')
OT's Ingeniería
@endsection

@section('mostraridot')

<div class="row">
<div class="col-sm-12">
  <div class="col-sm-4">
      <p><b>Fecha de Actualización:</b> {{$fechaActualizacion}}</p>
      <p><b>Fecha de Actual:</b> {{$fechaActual}}</p>
      <p><b>Diferencia de Fechas:</b> {{ $diferenciaFechas }}</p>
  </div>

  <h2><b>Número de OT {{$contact->numeroOt}}</b></h2>
  <br>
  <div class="col-sm-4">
      <p><b>Fecha de Alta:</b> {{$contact->fechaAlta}}</p>
  </div>
  <div class="col-sm-4">
      <p><b>Compañía que solicita el servicio:</b> {{$contact->companiaSolicitaServicio}}</p>
  </div>
  <div class="col-sm-4">
      <p><b>Tipo de Aeronave:</b> {{$contact->tipoAeronave}}</p>
  </div>
  <div class="col-sm-4">
      <p><b>Matrícula:</b> {{$contact->matricula}}</p>
  </div>
  <div class="col-sm-4">
      <p><b>Modelo:</b> {{$contact->modelo}}</p>
  </div>
  <div class="col-sm-4">
      <p><b>No. de Serie:</b> {{$contact->numeroSerie}}</p>
  </div>
  <div class="col-sm-4">
      <p><b>Hangar:</b> {{$contact->hangar}}</p>
  </div>
  <div class="col-sm-4">
      <p><b>T.T Motor 1:</b> {{$contact->ttMotor1}}</p>
  </div>
  <div class="col-sm-4">
      <p><b>T.T Motor 2:</b> {{$contact->ttMotor2}}</p>
  </div>
  <div class="col-sm-4">
      <p><b>No. Parte Motor 1:</b> {{$contact->numeroParteMotor1}}</p>
  </div>
  <div class="col-sm-4">
      <p><b>No. Parte Motor 2:</b> {{$contact->numeroParteMotor2}}</p>
  </div>
  <div class="col-sm-4">
      <p><b>No. Serie Motor 1:</b> {{$contact->numeroSerieMotor1}}</p>
  </div>
  <div class="col-sm-4">
      <p><b>No. Serie Motor 2:</b> {{$contact->numeroSerieMotor2}}</p>
  </div>
  <div class="col-sm-4">
      <p><b>No. Serie Planeador:</b> {{$contact->numeroSeriePlaneador}}</p>
  </div>
  <div class="col-sm-4">
      <p><b>T.T Planeador:</b> {{$contact->ttPlaneador}}</p>
  </div>
  <div class="col-sm-4">
      <p><b>Ciclos Totales:</b> {{$contact->ciclosTotales}}</p>
  </div>
  <div class="col-sm-4">
      <p><b>Observaciones:</b> {{$contact->observaciones}}</p>
  </div>
  <div class="col-sm-4">
      <p><b>Horas de Trabajo Estimadas:</b> {{$contact->horasTrabajoEstimadas}}</p>
  </div>
  <div class="col-sm-4">
      <p><b>Reporte:</b> {{$contact->reporte}}</p>
  </div>
  <div class="col-sm-4">
      <p><b>Fecha de Inicio:</b> {{$contact->fechaInicio}}</p>
  </div>
  <div class="col-sm-4">
      <p><b>Origen del Reporte:</b> {{$contact->origenReporte}}</p>
  </div>

</div>
</div>
@endsection

@extends('ots.otingenieria.base')

@section('main')
<div class="row">
 <div class="col-sm-8 offset-sm-2">
    <h1 class="display-3">Solicitud de Atención de Reportes</h1>
  <div>
    @if ($errors->any())
      <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
              <li>{{ $error }}</li>
            @endforeach
        </ul>
      </div><br />
    @endif
    <form method="post" action="{{ route('otingenieria.store') }}">
          @csrf
          <div class="form-group">
              <label for="first_name">No. OT:</label>
              <input type="text" class="form-control" name="numeroOt"/>
          </div>

          <div class="form-group">
              <label for="first_name">Fecha de alta:</label>
              <input type="date" class="form-control" name="fechaAlta"/>
          </div>

          <div class="form-group">
              <label for="first_name">Compañía que Solicita el Servicio:</label>
              <input type="text" class="form-control" name="companiaSolicitaServicio"/>
          </div>

          <div class="form-group">
              <label for="first_name">Tipo de Aeronave:</label>
              <input type="text" class="form-control" name="tipoAeronave"/>
          </div>

          <div class="form-group">
              <label for="first_name">Matrícula:</label>
              <input type="text" class="form-control" name="matricula"/>
          </div>

          <div class="form-group">
              <label for="first_name">Modelo:</label>
              <input type="text" class="form-control" name="modelo"/>
          </div>

          <div class="form-group">
              <label for="first_name">No. de Serie:</label>
              <input type="text" class="form-control" name="numeroSerie"/>
          </div>

          <div class="form-group">
              <label for="first_name">Hangar:</label>
              <input type="text" class="form-control" name="hangar"/>
          </div>

          <div class="form-group">
              <label for="first_name">T.T Motor 1:</label>
              <input type="text" class="form-control" name="ttMotor1"/>
          </div>

          <div class="form-group">
              <label for="first_name">T.T Motor 2:</label>
              <input type="text" class="form-control" name="ttMotor2"/>
          </div>

          <div class="form-group">
              <label for="first_name">No. de Parte Motor 1:</label>
              <input type="text" class="form-control" name="numeroParteMotor1"/>
          </div>

          <div class="form-group">
              <label for="first_name">No. de Parte Motor 2:</label>
              <input type="text" class="form-control" name="numeroParteMotor2"/>
          </div>

          <div class="form-group">
              <label for="first_name">No. de Serie Motor 1:</label>
              <input type="text" class="form-control" name="numeroSerieMotor1"/>
          </div>

          <div class="form-group">
              <label for="first_name">No. de Serie Motor 2:</label>
              <input type="text" class="form-control" name="numeroSerieMotor2"/>
          </div>

          <div class="form-group">
              <label for="first_name">No. de Serie Planeador:</label>
              <input type="text" class="form-control" name="numeroSeriePlaneador"/>
          </div>

          <div class="form-group">
              <label for="first_name">T.T Planeador:</label>
              <input type="text" class="form-control" name="ttPlaneador"/>
          </div>

          <div class="form-group">
              <label for="first_name">Ciclos Totales:</label>
              <input type="text" class="form-control" name="ciclosTotales"/>
          </div>

          <div class="form-group">
              <label for="first_name">Observaciones:</label>
              <input type="text" class="form-control" name="observaciones"/>
          </div>

          <div class="form-group">
              <label for="first_name">Horas de Trabajo Estimadas:</label>
              <input type="text" class="form-control" name="horasTrabajoEstimadas"/>
          </div>

          <div class="form-group">
              <label for="first_name">Reporte:</label>
              <input type="text" class="form-control" name="reporte"/>
          </div>

          <div class="form-group">
              <label for="first_name">Fecha de Inicio:</label>
              <input type="date" class="form-control" name="fechaInicio"/>
          </div>

          <div class="form-group">
              <label for="first_name">Origen del Reporte:</label>
              <input type="text" class="form-control" name="origenReporte"/>
          </div>

          <button type="submit" class="btn btn-primary-outline">Guardar</button>
      </form>
  </div>
</div>
</div>
@endsection

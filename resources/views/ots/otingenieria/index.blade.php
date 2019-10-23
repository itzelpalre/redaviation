@extends('ots.otingenieria.base')

@section('title')
OT's Ingeniería
@endsection

@section('buscador')
<form method="GET" action="otstatus.myFormFunction">
  <label><input type="radio" name="status" value="verde">verde </label>
  <label><input type="radio" name="status" value="rojo">rojo</label>
  <label><input type="radio" name="status" value="amarillo">amarillo</label>
  <label><input type="radio" name="status" value="azul">azul</label>
</form>

{{ Form::open(array('url' => 'otresultados', 'method' => 'GET', 'class' => 'navbar-form navbar-left pull-right', 'role' => 'search')) }}
    <div class="form-group">
      {!! Form::text('ot', null, ['class' => 'form-control', 'placeholder' => 'Buscar OT']) !!}
    </div>
    <button type="submit" class="btn btn-default">Buscar</button>
{{ Form::close() }}
@endsection

@section('tabla')
<div class="row">
<div class="col-sm-12">
  <table class="table table-striped">
    <thead>
        <tr>
          <td>OT</td>
          <td>Estatus</td>
          <td>No. Serie</td>
          <td>Marca/Modelo</td>
          <td>Matrícula</td>
        </tr>
    </thead>
    <tbody>
        @foreach($datosot as $ot)

        <tr>
            <td>{{$ot->numeroOt}}</td>
            <td>{{$ot->estatus}}</td>
            <td>{{$ot->numeroSerie}}</td>
            <td>{{$ot->modelo}}</td>
            <td>{{$ot->matricula}}</td>
            <td>
              <a href="{{ route('otingenieria.show',$ot->id)}}" class="btn btn-primary">Ver</a>
            </td>
        </tr>

        @endforeach
    </tbody>
  </table>
</div>
</div>
@endsection

@section('btnagregarot')
<div class="row">
<div class="col-sm-6">
  <table class="table table-striped">
    <tbody>
        <tr>
          <td><a href="{{ route('otingenieria.create')}}"><button type="button" class="btn btn-primary btn-lg">Agregar OT</button></a></td>
        </tr>
    </tbody>
  </table>
</div>
</div>
@endsection

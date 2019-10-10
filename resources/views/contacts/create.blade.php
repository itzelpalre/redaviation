@extends('administrador.base')

@section('title')
RAPS
@endsection

@section('btnagregar')
<div class="row">
<div class="col-sm-6">
  <table class="table table-striped">
    <tbody>
        <tr>
          <td><a href="{{ route('administrador.create')}}"><button type="button" class="btn btn-primary">Agregar Usuarios</button></a></td>
        </tr>
    </tbody>
  </table>
</div>
</div>
@endsection

@section('buscador')
<div class="row">
<div class="col-sm-6">
  <table class="table table-striped">
    <tbody>
        <tr>
          <td>Buscador</td>
        </tr>
    </tbody>
  </table>
</div>
</div>
@endsection

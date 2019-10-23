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
          <td><a href="{{ route('administrador.create')}}"><button type="button" class="btn btn-primary btn-lg">Agregar Usuario</button></a></td>
        </tr>
        <tr>
          <td><a href="{{ route('registroclientes.index')}}"><button type="button" class="btn btn-primary btn-lg">Usuario</button></a></td>
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

@section('tabla')
<div class="row">
<div class="col-sm-12">
  <table class="table table-striped">
    <thead>
        <tr>
          <td>Nombre</td>
          <td>Correo</td>
          <td>Teléfono</td>
          <td>Perfil de Usuario</td>
        </tr>
    </thead>
    <tbody>
        @foreach($contacts as $contact)
        <tr>
            <td>{{$contact->nombre}}</td>
            <td>{{$contact->correo}}</td>
            <td>{{$contact->telefono}}</td>
            <td>{{$contact->perfil}}</td>
            <td>
                <a href="{{ route('administrador.edit',$contact->id)}}" class="btn btn-primary">Editar</a>
            </td>
            <td>
                <form action="{{ route('administrador.destroy', $contact->id)}}" method="post">
                  @csrf
                  @method('DELETE')
                  <button class="btn btn-danger" type="submit">Dar de baja</button>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
  </table>
</div>
</div>
@endsection

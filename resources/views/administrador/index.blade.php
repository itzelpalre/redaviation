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
          <td>Agregar Usuario</button></td>
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
                <a href="{{ route('contacts.edit',$contact->id)}}" class="btn btn-primary">Editar</a>
                <a href="{{ route('contacts.create')}}" class="btn btn-primary">crear</a>
                <a href="{{ route('administrador.create')}}"><button type="button" class="btn btn-primary">Agregar Usuarios</button></a>
            </td>
            <td>
                <form action="{{ route('contacts.destroy', $contact->id)}}" method="post">
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

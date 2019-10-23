@extends('ots.otingenieria.base')

@section('main')
<div class="row">
 <div class="col-sm-8 offset-sm-2">
    <h1 class="display-3">Alta de Usuario</h1>
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
    <form method="post" action="{{ route('registroclientes.store') }}">
          @csrf
          <div class="form-group">
              <label for="nombre">Nombre:</label>
              <input type="text" class="form-control" name="name"/>
          </div>

          <div class="form-group">
              <label for="nombre">Email:</label>
              <input type="text" class="form-control" name="email"/>
          </div>

          <div class="form-group">
              <label for="nombre">Perfil de Usuario:</label>
              <select name="perfil">
                <option value="administrador">Administrador</option>
                <option value="ingenieria">Ingeniería</option>
                <option value="supervisor">Supervisor</option>
                <option value="tecnico">Técnico</option>
                <option value="almacen">Almacén</option>
                <option value="compras">Compras</option>
                <option value="gesa">GESA</option>
                <option value="cliente">Cliente</option>
              </select>
          </div>

          <div class="form-group">
              <label for="nombre">Password:</label>
              <input type="text" class="form-control" name="password"/>
          </div>

          <button type="submit" class="btn btn-primary-outline">Guardar</button>
      </form>
  </div>
</div>
</div>
@endsection

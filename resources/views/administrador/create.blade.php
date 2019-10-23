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
    <form method="post" action="{{ route('administrador.store') }}">
          @csrf
          <div class="form-group">
              <label for="nombre">Nombre:</label>
              <input type="text" class="form-control" name="nombre"/>
          </div>

          <div class="form-group">
              <label for="nombre">Correo:</label>
              <input type="text" class="form-control" name="correo"/>
          </div>

          <div class="form-group">
              <label for="nombre">Teléfono:</label>
              <input type="text" class="form-control" name="telefono"/>
          </div>

          <div class="form-group">
              <label for="nombre">Usuario:</label>
              <input type="text" class="form-control" name="usuario"/>
          </div>

          <div class="form-group">
              <label for="nombre">Contraseña:</label>
              <input type="text" class="form-control" name="contraseña"/>
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
              </select>
          </div>

          <div class="form-group">
              <label for="nombre">Fecha de Alta:</label>
              <input type="date" class="form-control" name="fechaAlta"/>
          </div>

          <div class="form-group">
              <label for="nombre">Fecha de Baja:</label>
              <input type="date" class="form-control" name="fechaBaja                          "/>
          </div>

          <div class="form-group">
              <label for="nombre">Estatus:</label>
              <select name="estatus">
                <option value="activo">Activo</option>
                <option value="inactivo">Inactivo</option>
              </select>
          </div>

          <div class="form-group">
              <label for="nombre">¿Quién lo dió de alta?:</label>
              <input type="text" class="form-control" name="owner"/>
          </div>

          <button type="submit" class="btn btn-primary-outline">Guardar</button>
      </form>
  </div>
</div>
</div>
@endsection

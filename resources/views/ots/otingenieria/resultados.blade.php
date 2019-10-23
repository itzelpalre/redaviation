@extends('ots.otingenieria.base')

@section('title')
OT's Ingeniería
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
        @foreach($numeroOt as $ot)
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

@extends('ots.otingenieria.base')

@section('main')

@if(@Auth::user()->hasRole('administrador'))
    <h2>Eres un Administrador</h2>
@endif

@if(@Auth::user()->hasRole('supervisor'))
    <h2>Eres un Supervisor</h2>
@endif

@if(@Auth::user()->hasRole('ingenieria'))
    <h2>Eres un Ingeniero</h2>
@endif

<h2>Tú perfil es: {{$perfil}}</h2>


@endsection

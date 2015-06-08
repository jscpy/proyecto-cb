@extends('layouts.master')

@section('content')
@include ('search')
<div class="table-responsive">
<table class='table table-hover table-striped' id="tabla">
  <thead>
    <tr>
        <th>Nombre</th>
        <th>Clave</th>
        <th>Carrera</th>
        <th>Semestre</th>
        <th>Reticula</th>
        <th>Horas Teóricas</th>
        <th>Horas Prácticas</th>
        <th>Total</th>
        <th>Editar</th>
        <th>Borrar</th>
    </tr>
  </thead>
      <tbody>
            @foreach($asignatura as $a)
              <tr>
                  <td>{{ $a->nombre }}</td>
                  <td>{{ $a->clave }}</td>
                  <td>{{ $a->carrera }}</td>
                  <td>{{ $a->semestre }}°</td>
                  <td>{{ $a->fk_reticula}}</td>
                  <td>{{ $a->horas_teoricas }}</td>
                  <td>{{ $a->horas_practicas}}</td>
                  <td>{{ $a->horas_totales}}</td>
                  <td><a href="/asignatura/edit/{{$a->id}}" class="btn btn-primary">Editar</a></td>
                  <td><a onclick="return confirmar();" href="/asignatura/destroy/{{$a->id}}" class="btn btn-danger">Borrar</a></td>
              </tr>
              @endforeach
      </tbody>
</table>
</div>
@stop


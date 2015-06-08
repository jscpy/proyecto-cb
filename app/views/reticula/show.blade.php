@extends('layouts.master')

@section('content')
<div class="table-responsive">
<table class='table table-hover table-striped' id="tabla">
  <thead>
    <tr>
        <th>Clave</th>
        <th>Carrera</th>
        <th>Editar</th>
        <th>Borrar</th>
    </tr>
  </thead>
      <tbody>
            @foreach($reticula as $r)
              <tr>
                  <td>{{ $r->clave }}</td>
                  <td>{{ $r->carrera }}</td>
                  <td><a href="/reticula/edit/{{$r->id}}" class="btn btn-primary">Editar</a></td>
                  <td><a href="/reticula/destroy/{{$r->id}}" class="btn btn-danger">Borrar</a></td>
              </tr>
              @endforeach
      </tbody>
</table>
</div>
@stop
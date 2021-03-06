@extends('layouts.master')

@section('content')
<form class="form-horizontal" role="form" action="/ofertar_materias/show" method="post" accept-charset="utf-8">
<div class="panel panel-primary">
<div class="panel-heading">
    <h3 class="panel-title" align="center">Mostrar Proyección por Carrera</h3>
  </div>
<div class="panel-body">
<div class="form-group">
     {{Form::label('carrera','Carrera', array('class' => 'col-lg-4 control-label'))}}
    <div class="col-lg-4">
        {{Form::select('carrera', 
    array('' => 'Selecciona la Carrera',
          'ARQ' => 'Arquitectura', 
          'IBQ' => 'Ingenieria en Bioquimica',
          'IEM' => 'Ingenieria en Electromecánica', 
          'IGE' => 'Ingenieria en Gestión Empresarial',
          'ISC' => 'Ingenieria en Sistemas Compútacionales', 
          'LA'  => 'Licenciatura en Administración',
          'LC'  => 'Licenciatura en Contaduria',
    ),null,array('class' => 'form-control'))}}
    </div>
    <div class="col-lg-4" >
        {{Form::submit('Buscar', array('class' => 'btn btn-primary'))}}
    </div>
</div>
</div>
</div>
</form>
@stop
@extends('layouts.master')

@section('content')
<form class="form-horizontal" role="form" action="/ofertar_materias/create" method="post" accept-charset="utf-8" onsubmit="return Proyeccion()">
<div class="panel panel-primary">
<div class="panel-heading">
    <h3 class="panel-title" align="center">Generar Proyección</h3>
  </div>
<div class="panel-body">
<div class="form-group">
{{Form::label('carrera','Carrera', array('class' => 'col-lg-2 control-label'))}}
    <div class="col-lg-4">
        {{Form::select('carrera', 
    array('' => 'Selecciona la Carrera',
          'ISC' => 'Ingenieria en Sistemas Compútacionales', 
          'IEM' => 'Ingenieria en Electromecánica', 
          'LA'  => 'Licenciatura en Administración',
          'IGE' => 'Ingenieria en Gestión Empresarial',
          'LC'  => 'Licenciatura en Contaduria',
          'IBQ' => 'Ingenieria en Bioquimica',
          'ARQ' => 'Arquitectura', 
    ),null,array('class' => 'form-control'))}}
    </div>
      {{Form::label('semestre','Semestre',array('class' => 'col-lg-1 control-label'))}}
    <div class="col-lg-1">
     {{Form::select('semestre', 
    array('' => '',
        '1' => '1', 
        '2' => '2', 
        '3' => '3',
        '4' => '4',
        '5' => '5',
        '6' => '6',
        '7' => '7'
    ),null,array('class' => 'form-control'))}}
    </div>
    <div class="col-lg-4" >
        {{Form::submit('Crear',array('class' => 'btn btn-primary'))}}
    </div>
  </div>
</div>
</div>
</form>
@stop
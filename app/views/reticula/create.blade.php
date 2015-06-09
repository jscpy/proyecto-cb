@extends('layouts.master')

@section('content')
<h2>Alta de Reticulas</h2>
@include('errors', array('errors' => $errors))
<hr/>
<br/>
<form class="form-horizontal" role="form" action="/reticula/store" method="post" accept-charset="utf-8">
<div class="form-group">
{{Form::label('clave', 'Clave', array('class' => 'col-lg-2 control-label'))}}
    <div class="col-lg-3">
    {{Form::text('clave', Input::old('clave'), array('class' => 'form-control','maxlength' => '13','onkeyup' => 'this.value = this.value.toUpperCase()','onkeypress' => 'return permite(event,"full")'))}}
    </div>
{{Form::label('carrera', Input::old('carrera'), array('class' => 'col-lg-2 control-label'))}}
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
    ),'Carrera',array('class' => 'form-control'))}}
    </div>
 </div>
 <div class="form-group">
    <div class="col-lg-offset-5 col-lg-2">
      {{Form::submit('Guardar', array('class' =>'btn btn-primary'))}}
	 </div>
 </div>
</form>
@stop
@extends('layouts.master')

@section('content')
<h2>Alta de Asignaturas</h2>
@include('errors', array('errors' => $errors))
<hr/>
<br/>
<form class="form-horizontal" role="form" action="/asignatura/store" method="post" accept-charset="utf-8">
<div class="form-group">
    {{Form::label('carrera','Carrera',array('class' => 'col-lg-2 control-label'))}}
    <div class="col-lg-4">
     {{Form::select('carrera', 
    array('' => 'Selecciona la Carrera',
          'ARQ' => 'Arquitectura', 
          'IBQ' => 'Ingenieria en Bioquimica',
          'IEM' => 'Ingenieria en Electromecánica', 
          'IGE' => 'Ingenieria en Gestión Empresarial',
          'ISC' => 'Ingenieria en Sistemas Compútacionales', 
          'LA'  => 'Licenciatura en Administración',
          'LC'  => 'Licenciatura en Contaduria'
    ),null,array('class' => 'form-control','onChange' => 'showReticula(this.value)'))}}
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
        '7' => '7',
        '8' => '8'
    ),null,array('class' => 'form-control'))}}
    </div>
    {{Form::label('fk_reticula','Reticula',array('class' => 'col-lg-1 control-label'))}}
    <div class="col-lg-2">
    {{Form::text('fk_reticula', Input::old('fk_reticula'), array('class' => 'form-control','readonly' => 'true'))}}
    </div>
</div>

<div class="form-group">
     {{Form::label('nombre','Nombre',array('class' => 'col-lg-2 control-label'))}}
    <div class="col-lg-3">
    {{Form::text('nombre', Input::old('nombre'), array('class' => 'form-control','maxlength' => '50','onkeyup' => 'this.value = this.value.toUpperCase()','onkeypress' => 'return permite (event, "car")'))}}
    </div>
     {{Form::label('clave','Clave', array('class' => 'col-lg-2 control-label'))}}
    <div class="col-lg-3">
    {{Form::text('clave', Input::old('clave'), array('class' => 'form-control','maxlength' => '7', 'onkeyup' => 'this.value = this.value.toUpperCase()','onkeypress' => 'return permite(event, "car_num")'))}}
    </div>
</div>

<div class="form-group">	
    {{Form::label('horas_teoricas', 'Horas Teóricas', array('class' => 'col-lg-3 control-label'))}}
    <div class="col-lg-1">
    {{Form::select('horas_teoricas', 
    array('0' => '0', 
          '1' => '1', 
          '2' => '2', 
          '3' => '3', 
          '4' => '4',
          '5' => '5',
          '6' => '6'
    ),null ,array('class' => 'form-control','onChange' => 'calculo()'))}}
    </div>
    {{Form::label('horas_practicas', 'Horas Prácticas', array('class' => 'col-lg-2 control-label'))}}
    <div class="col-lg-1">
    {{Form::select('horas_practicas', 
    array('0' => '0', 
          '1' => '1', 
          '2' => '2', 
          '3' => '3', 
          '4' => '4'
    ),null ,array('class' => 'form-control','onChange' => 'calculo()'))}}
    </div>
    {{Form::label('horas_totales', 'Horas Totales', array('class' => 'col-lg-2 control-label'))}}
    <div class="col-lg-1">
    {{Form::text('horas_totales', Input::old('horas_totales'), array('class' => 'form-control','readonly' => 'true'))}}
    </div>
</div>

 <hr/>
 <br/>

 <div class="form-group">
    <div class="col-lg-offset-5 col-lg-2">
        {{Form::submit('Guardar', array('class' =>'btn btn-primary'))}}
	</div>
 </div>

</form>
@stop
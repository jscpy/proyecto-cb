@extends('layouts.master')

@section('content')
<h2>Editar Asignatura</h2>
@include('errors', array('errors' => $errors))
<hr/>
<br/>
<form class="form-horizontal" role="form" action="/asignatura/update/{{$asignatura->id}}" method="post" 
accept-charset="utf-8">
<div class="form-group">
    {{Form::label('carrera','Carrera',array('class' => 'col-lg-2 control-label'))}}
    <div class="col-lg-4">
     {{Form::select('carrera', 
    array($asignatura->carrera => $asignatura->carrera,
          'ISC' => 'Ingenieria en Sistemas Compútacionales', 
          'IEM' => 'Ingenieria en Electromecánica', 
          'LA'  => 'Licenciatura en Administración',
          'IGE' => 'Ingenieria en Gestión Empresarial',
          'LC'  => 'Licenciatura en Contaduria',
          'IBQ' => 'Ingenieria en Bioquimica',
          'ARQ' => 'Arquitectura', 
    ),'Carrera',array('class' => 'form-control'))}}
    </div>
    {{Form::label('semestre','Semestre',array('class' => 'col-lg-1 control-label'))}}
    <div class="col-lg-1">
     {{Form::select('semestre', 
    array($asignatura->semestre => $asignatura->semestre,
        '1' => '1', 
        '2' => '2', 
        '3' => '3',
        '4' => '4',
        '5' => '5',
        '6' => '6',
        '7' => '7'
    ),null,array('class' => 'form-control'))}}
    </div>
    {{Form::label('fk_reticula','Reticula',array('class' => 'col-lg-1 control-label'))}}
    <div class="col-lg-3">
    <select class="form-control" name="fk_reticula">
        <option value="{{$asignatura->fk_reticula}}">{{$asignatura->fk_reticula}}</option>
        @foreach ($reticula as $r)
            <option value="{{$r->clave}}">{{$r->clave}}</option>
        @endforeach
    </select>
    </div>
</div>

<div class="form-group">
     {{Form::label('nombre','Nombre',array('class' => 'col-lg-2 control-label'))}}
    <div class="col-lg-3">
    {{Form::text('nombre', $asignatura->nombre, array('class' => 'form-control','maxlength' => '35','onkeyup' => 'this.value = this.value.toUpperCase()','onkeypress' => 'return permite (event, "car")'))}}
    </div>
     {{Form::label('clave','Clave', array('class' => 'col-lg-2 control-label'))}}
    <div class="col-lg-3">
    {{Form::text('clave', $asignatura->clave, array('class' => 'form-control','maxlength' => '7', 'onkeyup' => 'this.value = this.value.toUpperCase()','onkeypress' => 'return permite(event, "car_num")'))}}
    </div>
</div>

<div class="form-group">    
{{Form::label('horas_teoricas', 'Horas Teóricas', array('class' => 'col-lg-3 control-label'))}}
    <div class="col-lg-1">
    {{Form::select('horas_teoricas', 
    array($asignatura->horas_teoricas => $asignatura->horas_teoricas,
        '0' => '0', 
        '1' => '1', 
        '2' => '2', 
        '3' => '3', 
        '4' => '4'
    ),null ,array('class' => 'form-control','onChange' => 'calculo()'))}}
    </div>
{{Form::label('horas_practicas', 'Horas Prácticas', array('class' => 'col-lg-2 control-label'))}}
    <div class="col-lg-1">
    {{Form::select('horas_practicas', 
    array($asignatura->horas_practicas => $asignatura->horas_practicas,
        '0' => '0', 
        '1' => '1', 
        '2' => '2', 
        '3' => '3', 
        '4' => '4'
    ),null ,array('class' => 'form-control','onChange' => 'calculo()'))}}
    </div>
{{Form::label('horas_totales', 'Horas Totales', array('class' => 'col-lg-2 control-label'))}}
    <div class="col-lg-1">
    {{Form::text('horas_totales',$asignatura->horas_totales, array('class' => 'form-control','readonly' => 'true'))}}
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
@extends('layouts.welcome')

@section('content')
<div class="row">
<div class="col-md-4 col-md-offset-4"> 
<form class="form" role="form" method="post" action="/login" accept-charset="utf-8">
  <h2>Iniciar Sesión</h2>
    <br/>
    <div class="input-group input-group-lg" >
        <span class="input-group-addon">
            <span class="glyphicon glyphicon-user"></span> 
        </span>
            <input type="text" class="form-control" placeholder="Usuario" name='user' id='user'>
    </div>
    <div class="input-group input-group-lg" >
        <span class="input-group-addon"> 
            <span class="glyphicon glyphicon-lock"></span>
        </span>
            <input type="password" class="form-control" placeholder="Contraseña" name='passw' id='passw'>
    </div>
<br/>
    <button type="submit" class="btn btn-primary btn-lg btn-block">Entrar</button>
</form>   
<br/>
@if (Session::has('mensaje_error')) 
<div class="alert alert-warning">
    <button type="button" class="close" data-dismiss="alert">&times;</button>
        <b>{{Session::get('mensaje_error')}}</b>
</div>
@endif
</div>
</div>
@stop

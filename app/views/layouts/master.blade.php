<!DOCTYPE html>
<html lang="es">
 <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" href="/imagenes/logo.png">    
<title>Ciencias Básicas</title>      
    
      <!-- CSS de Bootstrap -->
      <link href="/css/bootstrap.min.css" rel="stylesheet" media="screen">
      <link href="/css/bootstrap.css" rel="stylesheet" media="screen">
      <link href="/css/bootstrap-theme.css" rel="stylesheet">
      <link href="/css/jumbotron.css" rel="stylesheet">
      <link href="/css/sticky-footer.css" rel="stylesheet">
    <style type="text/css">
      h2{text-align: center}
      #Encabezado1,#Encabezado2,#Encabezado3,#Encabezado4,#Encabezado5,#Encabezado6{text-align: center;} 
      span {font-size: 15px;}
      .glyphicon.glyphicon-eye-close{font-size: 40px;}
      .glyphicon.glyphicon-asterisk {color: red; font-size: 20px}
      b {color:red;}
    </style>

      <!-- JS de Bootstrap -->
      {{HTML::script('/js/jquery-1.11.0.js')}}
      {{HTML::script('/js/bootstrap.min.js')}}
      {{HTML::script('/js/TotalHoras.js')}}
      {{HTML::script('/js/calculo_asignatura.js')}}
      {{HTML::script('/js/deshabilitar.js')}}
      {{HTML::script('/js/validar.js')}}
      {{HTML::script('/js/confirmar.js')}}
      {{HTML::script('/js/buscar.js')}}
      {{HTML::script('/js/mostrar_reticula.js')}}
      {{HTML::script('/js/jquery.uitablefilter.js')}}
      {{HTML::script('/js/OcultarCampo.js')}}
      {{HTML::script('/js/ConfirmarGuardar.js')}}
</head>
<body role="document" onload="ValidacionDeCheckBox();" >
	<!-- Fixed navbar -->
<div class="navbar navbar-default navbar-fixed-top" role="navigation">
      <div class="container">
       <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="/">Ciencias Báscias 2014</a>
        </div>
        <div class="navbar-collapse collapse">
          <ul class="nav navbar-nav">
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown">Asignatura <b class="caret"></b></a>
              <ul class="dropdown-menu">
                <li><a href="/asignatura/create">Alta</a></li>
                <li><a href="/asignatura/show">Mostrar</a></li>
                <!-- <li class="divider"></li>
                <li class="dropdown-header">Nav header</li>
                <li><a href="#">Separated link</a></li>
                <li><a href="#">One more separated link</a></li> -->
              </ul>
            </li>
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown">Reticula <b class="caret"></b></a>
              <ul class="dropdown-menu">
                <li><a href="/reticula/create">Alta</a></li>
                <li><a href="/reticula/show">Mostrar</a></li>
              </ul>
            </li>
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown">Ofetar Materias <b class="caret"></b></a>
              <ul class="dropdown-menu" role="menu" aria-labelledby="dLabel">
                <li><a href ="/ofertar_materias">Alta</a></li>
                <li><a href ="/ofertar_materias/search">Mostrar</a></li>
              </ul>
            </li>
          </ul>
          <ul class="nav navbar-nav navbar-right">
            <li><a href="/logout">Salir</a></li>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </div>

<div class="container" >
	@yield('content')
</div>

<!--   Pie de Pagina   
<div id="footer">
      <div class="container">
        <p class="text-muted">Proyecto de Ciencias Básicas 2014.</p>
        </div>
    </div>
-->
</body>
</html>
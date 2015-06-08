<!DOCTYPE html>
<html lang="es">
 <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" href="">    

<title>Ciencias Básicas</title>      

      <!-- CSS de Bootstrap -->
      <link href="/css/bootstrap.min.css" rel="stylesheet" media="screen">
      <link href="/css/bootstrap.css" rel="stylesheet" media="screen">
      <link href="/css/bootstrap-theme.css" rel="stylesheet">
      <link href="/css/jumbotron.css" rel="stylesheet">
      <link href="/css/sticky-footer.css" rel="stylesheet">
      <style type="text/css">
        h2{text-align: center; color: white}
        body {background: url("/imagenes/colorful.jpg");}
        b{color: red;}
      </style>

      <!-- JS de Bootstrap -->
      <script src="/js/jquery-1.11.0.js"></script>
      <script src="/js/bootstrap.min.js"></script>
      <script src="/js/deshabilitar.js"></script>
      
</head>
<body role="document">
<div class="navbar navbar-inverse navbar-fixed-top" role="navigation">
      <div class="container">
       <div class="navbar-header">
          <a class="navbar-brand" href="/">Ciencias Báscias 2014</a>
        </div>
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
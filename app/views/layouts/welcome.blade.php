<!DOCTYPE html>
<html lang="es">
 <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" href=""> 
    <style type="text/css">
        h2{text-align: center; color: white;}
        body {background: url("/imagenes/colorful.jpg");}
        b{color: red;}
    </style>   
<title>Ciencias Básicas</title>       
</head>
<body role="document">
<div class="navbar navbar-inverse navbar-fixed-top" role="navigation">
      <div class="container">
       <div class="navbar-header">
          <a class="navbar-brand" href="/">Ciencias Básicas 2015</a>
        </div>
      </div>
</div>

<div class="container" >
	@yield('content')
</div>
</body>
      <!-- CSS de Bootstrap -->
      <link href="/css/bootstrap.min.css" rel="stylesheet" media="screen">
      <link href="/css/bootstrap.css" rel="stylesheet" media="screen">
      <link href="/css/bootstrap-theme.css" rel="stylesheet">
      <link href="/css/jumbotron.css" rel="stylesheet">
      <link href="/css/sticky-footer.css" rel="stylesheet">

      <!-- JS de Bootstrap -->
      <script async src="/js/jquery-1.11.0.js"></script>
      <script async src="/js/bootstrap.min.js"></script>
      <script async src="/js/deshabilitar.js"></script>
</html>
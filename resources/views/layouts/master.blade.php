<!DOCTYPE html>
<html>
<head>
    <title>Candy UCAB - @yield('title')</title>
    <meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link href="https://fonts.googleapis.com/css?family=Pacifico|Tajawal:400,500,700" rel="stylesheet">
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <link rel="stylesheet" href="css/estilos-propios.css">
</head>
<body>
<nav class="navbar navbar-default" role="navigation">
	  <div class="container-fluid">
	    <!-- Brand and toggle get grouped for better mobile display -->
	    <div class="navbar-header">
	      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
	        <span class="sr-only">Toggle navigation</span>
	        <span class="icon-bar"></span>
	        <span class="icon-bar"></span>
	        <span class="icon-bar"></span>
	      </button>
	      <a class="navbar-brand" href="/Candy-ucab-/public/"><strong><span class="logo-responsive">Candy UCAB</span></strong></a>
	    </div>

	    <!-- Collect the nav links, forms, and other content for toggling -->
	    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
	      <ul class="nav navbar-nav text-center">
	        <li><a href="/Candy-ucab-/public/">Inicio</a></li>
	        <li class="active"><a href="productos">Productos</a></li>
	        <li><a href="tiendas">Tiendas</a></li>
	        <li><a href="nosotros">Nosotros</a></li>
	        <li><a href="ofertas">Ofertas</a></li>
	        <li><a href="contacto">Contacto</a></li>
	      </ul>
			<hr>
	      <ul class="nav navbar-nav navbar-right text-center">
	        <li><a href="#">Registro</a></li>
	        <li><a href="#">Login</a></li>
	      </ul>
	    </div><!-- /.navbar-collapse -->
	  </div><!-- /.container-fluid -->
	</nav>
	
	<div class="container-fluid">	
		<div class="row">
			<div class="col-md-offset-10 col-md-2 registro-login">
				<ul class="list-inline separacion-top login">
					<li><a href="#">Login</a></li>
					<li><a href="#">Registro</a></li>
				</ul>
			</div>
		</div>

		<div class="row contenedor-menu">
			<div class="col-md-12">
				<header class="menu-principal">
					<nav>
						<ul class="list-inline text-center">
							<li><a class="item-menu" href="/Candy-ucab-/public/">Inicio</a></li>
							<li><a class="item-menu" href="productos">Productos</a></li>
							<li><a class="item-menu" href="tiendas">Tiendas</a></li>
							<li><a href="/Candy-ucab-/public/"><img class="logo" src="imgs/sweet.png" alt="Logotipo"></a></li>
							<li><a class="item-menu" href="nosotros">Nosotros</a></li>
							<li><a class="item-menu" href="ofertas">Ofertas</a></li>
							<li><a class="item-menu" href="contacto">Contacto</a></li>
						</ul>
					</nav>
				</header>
			</div>
		</div>
	</div>

	@section('contenido')

	@show

	
	<footer>
		<div class="container">
			<div class="row">
				<div class="col-md-12 text-center">
					<p id="texto-footer">Candy UCAB - Un universo de sabores - 1951 - 
						<script type="text/javascript">
							var fecha = new Date();
							var anio = fecha.getFullYear();
							var texto = document.getElementById('texto-footer');
							texto.innerText += ' ' + anio;			
						</script>
					</p>
				</div>
			</div>
		</div>
	</footer>

	

    <script src="js/jquery-min.js"></script>
    <script src="js/bootstrap.js"></script>
</body>
</html>
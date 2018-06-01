@extends('layouts.master')

@section('title', 'Contacto')

@section('contenido')
<div class="container">
		<div class="row">
			<div class="col-md-12 text-center">
				<h1>Contacto</h1>
				<p><a href="/Candy-ucab-/public/">Inicio</a> > Contacto</p>
			</div>
		</div>
	</div>

	<div class="container-fluid">
		<div class="row">
			<div class="col-md-12 jumbotron">
				<div class="row">
					<div class="col-md-offset-2 col-md-8">
						<h2 class="text-center">Nuestros datos de contacto</h2>
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nihil laboriosam, incidunt officia quisquam earum sit magnam alias ducimus id accusamus repudiandae pariatur, aliquam nesciunt, dignissimos eos nostrum odit architecto. Temporibus distinctio quidem nesciunt. Necessitatibus assumenda id sint atque tempora obcaecati!</p>
					</div>
				</div>
			</div>
		</div>
	</div>

	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div class="row">
					<div class="col-md-3">
						<div class="contenedor-tienda">
							<h3 class="text-center">Horas de trabajo</h3>
							<p>
								Lunes - Viernes: 8:00-5:30 <br>
								Sábados: 9:00 - 4:00 <br>
								Domingos: Cerrado <br>
							</p>

						</div>
					</div>
					<div class="col-md-6">
						<div class="contenedor-tienda">
							<h3 class="text-center">Escríbenos</h3>

				<form class="form-horizontal" role="form">
				  <div class="form-group">
				    <label for="inputEmail3" class="col-sm-2 control-label"></label>
				    <div class="col-sm-10">
				      <input type="email" class="form-control" id="inputEmail3" placeholder="Nombre">
				    </div>
				  </div>
				  <div class="form-group">
				    <label for="inputPassword3" class="col-sm-2 control-label"></label>
				    <div class="col-sm-10">
				      <input type="password" class="form-control" id="inputPassword3" placeholder="Apellido">
				    </div>
				  </div>
				  
				<div class="form-group">
				<div class="col-sm-offset-2 col-sm-10">
				 	<textarea placeholder="Mensaje" class="form-control" rows="3"></textarea>
				</div>
			</div>

				  <div class="form-group">
				    <div class="col-sm-12 text-right">
				      <button type="submit" class="btn btn-default">Enviar</button>
				    </div>
				  </div>
				</form>
						</div>
					</div>
					<div class="col-md-3">
						<div class="contenedor-tienda">
							<h3 class="text-center">Dirección</h3>
							<address>
								Caracas <br>
								Montalban <br>
								Venezuela <br>
								1030
							</address>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<div class="container-fluid contenedor-mapa">
		<div class="row">
			<div class="col-md-12">
				<h2 class="text-center">Ubicación de la fabrica principal</h2>
				 <div id="map">			 	
				 	<script>
				      var map;
				      function initMap() {
				        map = new google.maps.Map(document.getElementById('map'), {
				          center: {lat: 10.4641952, lng: -66.9764051},
				          zoom: 17
				        });
				      }
				    </script>
				    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDJffTv8CU_cbNd3lUyJvODIsYc5iJG44U&callback=initMap"
				    async defer></script>
				 </div>				    
			</div>
		</div>
	</div>
	@include('layouts.seccion-suscripcion')
@stop
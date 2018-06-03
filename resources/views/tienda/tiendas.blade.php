@extends('layouts.master')

@section('title', 'Tiendas')

@section('contenido')

<div class="container">
		<div class="row">
			<div class="col-md-12 text-center">
				<h1>Tiendas</h1>
				<p><a href="/">Inicio</a> > Tiendas</p>
			</div>
		</div>
	</div>

	<div class="container-fluid">
		<div class="row">
			<div class="col-md-12 jumbotron">
				<div class="row">
					<div class="col-md-offset-2 col-md-8">
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nihil laboriosam, incidunt officia quisquam earum sit magnam alias ducimus id accusamus repudiandae pariatur, aliquam nesciunt, dignissimos eos nostrum odit architecto. Temporibus distinctio quidem nesciunt. Necessitatibus assumenda id sint atque tempora obcaecati!</p>
					</div>
				</div>
			</div>
		</div>
	</div>






							@section('central')
							@show



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
				    <script src="{{asset('https://maps.googleapis.com/maps/api/js?key=AIzaSyDJffTv8CU_cbNd3lUyJvODIsYc5iJG44U&callback=initMap')}}"
				    async defer></script>
				 </div>
			</div>
		</div>
	</div>

	@include('layouts.seccion-suscripcion')

	@stop

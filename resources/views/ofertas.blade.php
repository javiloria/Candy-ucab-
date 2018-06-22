@extends('layouts.master')

@section('title', 'Ofertas')

@section('contenido')
<div class="container">
		<div class="row">
			<div class="col-md-12 text-center">
				<h1>Ofertas</h1>
				<p><a href="/">Inicio</a> > <a href="productos">Productos</a> > Ofertas</p>
			</div>
		</div>
	</div>

	<div class="container-fluid">
		<div class="row">
			<div class="col-md-12 jumbotron">
				<h2 class="text-center">Lista de productos escogidos</h2>
				<div class="row">
					<div class="col-md-offset-2 col-md-8">
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nihil laboriosam, incidunt officia quisquam earum sit magnam alias ducimus id accusamus repudiandae pariatur, aliquam nesciunt, dignissimos eos nostrum odit architecto. Temporibus distinctio quidem nesciunt. Necessitatibus assumenda id sint atque tempora obcaecati!</p>
					</div>
				</div>
			</div>
		</div>
	</div>

	<div class="container">
		<div class="row">
			<div class="col-md-8">

				<h2 class="alerta-descuentos">Desde el día % hasta el día %</h2>

				<div class="contenedor-productos">

					<div class="contenedor-producto">
						<h4 class="porcentaje">50%</h4>
						<span class="descuento">De descuento</span>
						<img src="{{asset('imgs/assets/p1.jpg')}}" alt="">
						<div class="descripcion-producto">
							<h4>Item 1</h4>
							<span>50 BS</span>
						</div>
					</div>

					<div class="contenedor-producto">
						<h4 class="porcentaje">50%</h4>
						<span class="descuento">De descuento</span>
						<img src="{{asset('imgs/assets/p1.jpg')}}" alt="">
						<div class="descripcion-producto">
							<h4>Item 1</h4>
							<span>50 BS</span>
						</div>
					</div>

					<div class="contenedor-producto">
						<h4 class="porcentaje">50%</h4>
						<span class="descuento">De descuento</span>
						<img src="{{asset('imgs/assets/p1.jpg')}}" alt="">
						<div class="descripcion-producto">
							<h4>Item 1</h4>
							<span>50 BS</span>
						</div>
					</div>

					<div class="contenedor-producto">
						<h4 class="porcentaje">50%</h4>
						<span class="descuento">De descuento</span>
						<img src="{{asset('imgs/assets/p1.jpg')}}" alt="">
						<div class="descripcion-producto">
							<h4>Item 1</h4>
							<span>50 BS</span>
						</div>
					</div>

					<div class="contenedor-producto">
						<h4 class="porcentaje">50%</h4>
						<span class="descuento">De descuento</span>
						<img src="{{asset('imgs/assets/p1.jpg')}}" alt="">
						<div class="descripcion-producto">
							<h4>Item 1</h4>
							<span>50 BS</span>
						</div>
					</div>

					<div class="contenedor-producto">
						<h4 class="porcentaje">50%</h4>
						<span class="descuento">De descuento</span>
						<img src="{{asset('imgs/assets/p1.jpg')}}" alt="">
						<div class="descripcion-producto">
							<h4>Item 1</h4>
							<span>50 BS</span>
						</div>
					</div>


				</div>


			</div>

			<div class="col-md-4 text-center">
				<img class="banner-oferta text-center" src="{{asset('imgs/assets/banner-candy-ucab.jpg')}}" alt="">
			</div>

		</div>
	</div>
	@include('layouts.seccion-suscripcion')
	@stop

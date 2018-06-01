@extends('layouts.master')

@section('title', 'Nosotros')

@section('contenido')
<div class="container">
		<div class="row">
			<div class="col-md-12 text-center">
				<h1>Nosotros</h1>
				<p><a href="/Candy-ucab-/public/">Inicio</a> > Nosotros</p>
			</div>
		</div>
	</div>

	<div class="container-fluid">
		<div class="row">
			<div class="col-md-12 jumbotron">
				<div class="row">
					<div class="col-md-offset-2 col-md-8">
						<h2 class="text-center">Nuestra historia</h2>
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nihil laboriosam, incidunt officia quisquam earum sit magnam alias ducimus id accusamus repudiandae pariatur, aliquam nesciunt, dignissimos eos nostrum odit architecto. Temporibus distinctio quidem nesciunt. Necessitatibus assumenda id sint atque tempora obcaecati!</p>
					</div>
				</div>
			</div>
		</div>
	</div>

	<div class="container separador">
		<div class="row">
			<div class="col-md-12">
				<div class="row">
					
					<div class="col-md-offset-2 col-md-8">
						<h2 class="text-center">Nuestra misión</h2>
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nihil laboriosam, incidunt officia quisquam earum sit magnam alias ducimus id accusamus repudiandae pariatur, aliquam nesciunt, dignissimos eos nostrum odit architecto. Temporibus distinctio quidem nesciunt. Necessitatibus assumenda id sint atque tempora obcaecati!</p>
					</div>


					<div class="col-md-3">
						<div class="contenedor-tienda">

							<img class="estilo-tiendas" src="imgs/assets/tienda-1.jpg" alt="">
							<h3 class="text-center">Altos estándares</h3>
						</div>
					</div>
					<div class="col-md-3">
						<div class="contenedor-tienda">
							<img class="estilo-tiendas" src="imgs/assets/tienda-1.jpg" alt="">
							<h3 class="text-center">Trabajo duro</h3>
						</div>
					</div>
					<div class="col-md-3">
						<div class="contenedor-tienda">
							<img class="estilo-tiendas" src="imgs/assets/tienda-1.jpg" alt="">
							<h3 class="text-center">Productos calificados</h3>
						</div>
					</div>
					<div class="col-md-3">
						<div class="contenedor-tienda">
							<img class="estilo-tiendas" src="imgs/assets/tienda-1.jpg" alt="">
							<h3 class="text-center">Responsabilidad</h3>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<div class="seccion-a">
		<div class="container">
			<div class="row separador-amelia">
				<div class="col-md-offset-3 col-md-3">
					<div class="contenedor-imagen">
						<img src="imgs/assets/amelia-farrisiti.jpg" alt="">
					</div>
				</div>
				<div class="col-md-4">
					<h3 class="text-center titulos-principales">Amelia Farrisiti</h3>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Unde vitae perferendis, libero quaerat facilis amet possimus distinctio aliquid harum ipsa incidunt dolorum dolorem accusantium reiciendis accusamus deserunt aperiam sit maiores, tempore voluptas necessitatibus ducimus tempora quae repudiandae minima! Nihil, laudantium.</p>
				</div>
			</div>
		</div>
	</div>
	@include('layouts.seccion-suscripcion')
	@stop
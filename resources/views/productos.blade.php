@extends('layouts.master')

@section('title', 'Productos')

@section('contenido')

	<div class="container">
		<div class="row">
			<div class="col-md-12 text-center">
				<h1>Productos</h1>
				<p><a href="/Candy-ucab-/public/">Inicio</a> > Productos</p>
			</div>
		</div>

		<div class="row">
			<div class="col-md-8">
				<div class="container">
					<div class="row">
						<div class="col-md-3 text-leftcol-md-offset-1">Mostrando N resultados</div>
						<div class="col-md-4">
							<select class="form-control" id="sel1">
								<option>Filtrar por categorías</option>
						        <option>1</option>
						        <option>2</option>
						        <option>3</option>
						        <option>4</option>

					      	</select>
						</div>
					</div>
				</div>

				<div class="contenedor-productos">
					
					<div class="contenedor-producto">
						<img src="imgs/assets/p1.jpg" alt="">
						<div class="descripcion-producto">
							<h4>Item 1</h4>
							<span>50 BS</span>
						</div>
					</div>

					<div class="contenedor-producto">
						<img src="imgs/assets/p1.jpg" alt="">
						<div class="descripcion-producto">
							<h4>Item 1</h4>
							<span>50 BS</span>
						</div>
					</div>

					<div class="contenedor-producto">
						<img src="imgs/assets/p1.jpg" alt="">
						<div class="descripcion-producto">
							<h4>Item 1</h4>
							<span>50 BS</span>
						</div>
					</div>

					<div class="contenedor-producto">
						<img src="imgs/assets/p1.jpg" alt="">
						<div class="descripcion-producto">
							<h4>Item 1</h4>
							<span>50 BS</span>
						</div>
					</div>

					<div class="contenedor-producto">
						<img src="imgs/assets/p1.jpg" alt="">
						<div class="descripcion-producto">
							<h4>Item 1</h4>
							<span>50 BS</span>
						</div>
					</div>

					<div class="contenedor-producto">
						<img src="imgs/assets/p1.jpg" alt="">
						<div class="descripcion-producto">
							<h4>Item 1</h4>
							<span>50 BS</span>
						</div>
					</div>

					<div class="contenedor-producto">
						<img src="imgs/assets/p1.jpg" alt="">
						<div class="descripcion-producto">
							<h4>Item 1</h4>
							<span>50 BS</span>
						</div>
					</div>

					<div class="contenedor-producto">
						<img src="imgs/assets/p1.jpg" alt="">
						<div class="descripcion-producto">
							<h4>Item 1</h4>
							<span>50 BS</span>
						</div>
					</div>

					<div class="contenedor-producto">
						<img src="imgs/assets/p1.jpg" alt="">
						<div class="descripcion-producto">
							<h4>Item 1</h4>
							<span>50 BS</span>
						</div>
					</div>

					<div class="contenedor-producto">
						<img src="imgs/assets/p1.jpg" alt="">
						<div class="descripcion-producto">
							<h4>Item 1</h4>
							<span>50 BS</span>
						</div>
					</div>

					<div class="contenedor-producto">
						<img src="imgs/assets/p1.jpg" alt="">
						<div class="descripcion-producto">
							<h4>Item 1</h4>
							<span>50 BS</span>
						</div>
					</div>

					<div class="contenedor-producto">
						<img src="imgs/assets/p1.jpg" alt="">
						<div class="descripcion-producto">
							<h4>Item 1</h4>
							<span>50 BS</span>
						</div>
					</div>		

					
				</div>

				
			</div>

			<div class="col-md-4 text-center">
				<div class="carrito">
					<h4>Carrito de productos</h4>
					<ul>
						<li>Item 1</li>
						<li>Item 1</li>
						<li>Item 1</li>
						<li>Item 1</li>
					</ul>
					<a class="btn btn-primary btn-lg botoncito" href="#">Realizar compra</a>
				</div>
			</div>

		</div>
	</div>

	@include('layouts.seccion-suscripcion')

@stop
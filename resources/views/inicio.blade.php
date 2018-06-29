@extends('layouts.master')

@section('title', 'Inicio')

@section('contenido')

	<div class="container-fluid">
		<div class="row background-principal">
			<div class="col-md-12">
				<div class="container">
					<div class="row">
						<div class="col-md-offset-2 col-md-8 text-center contenedor-banner">
							<p>
								<h2 class="titulos-principales tu-vida">¡Tu vida es dulce!</h2>
								<p class="text-justify">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Pariatur quaerat repudiandae ratione laudantium libero, animi enim optio ut facere ducimus! Est neque porro optio. Quo ducimus pariatur error accusamus provident eligendi modi, reiciendis quia, maxime, quibusdam ullam dolore non aliquam tempore cupiditate rerum, culpa. Necessitatibus aperiam quae explicabo aut, eligendi!</p>
							</p>

						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<div class="container-fluid">
		<div class="row ajuste-100">
			<div class="col-md-offset-2 col-md-8">
				<h2 class="text-center titulos-principales">Somos Candy UCAB</h2>
				<p class="text-justify">
					Lorem ipsum dolor sit amet, consectetur adipisicing elit. Tenetur nulla eius odio nobis asperiores, nemo neque totam, eveniet harum corporis, vero in ex nihil enim voluptatem. Dignissimos cupiditate omnis, laudantium quis quisquam quasi molestias assumenda, inventore est rem, debitis ipsa fugiat voluptatem repudiandae optio corrupti rerum. Totam, atque! Fugiat nobis, error modi iste. Sit temporibus, rem ab facilis nam cumque reiciendis quidem beatae sed vel enim odio pariatur porro doloremque consequatur, ipsum. Quae quibusdam tenetur nostrum cupiditate commodi alias sint. Quia nisi odio cum molestiae incidunt autem adipisci unde rerum ipsa eum earum non facere nemo, tempore iusto nulla quo.
				</p>
			</div>

		<div class="text-center">
			<div class="col-md-offset-2 col-md-2 texto-personalizado txt1">Tradición</div>
			<div class="col-md-2 texto-personalizado txt2">Calidad</div>
			<div class="col-md-2 texto-personalizado txt1">Creatividad</div>
			<div class="col-md-2 texto-personalizado txt2">Pasión</div>
		</div>

		</div>


	</div>

	<div class="seccion-a">
		<div class="container">
			<div class="row">
				<h2 class="text-center titulos-principales">Nuestros productos estrella</h2>
				<div class="col-md-3 text-center">
					<img class="productos-principal" src="{{asset('imgs/assets/p1.jpg')}}" alt="">
					<h4>Rimbombin</h4>
				</div>
				<div class="col-md-3 text-center">
					<img class="productos-principal" src="{{asset('imgs/assets/p2.jpg')}}" alt="">
					<h4>Chupilita</h4>
				</div>
				<div class="col-md-3 text-center">
					<img class="productos-principal" src="{{asset('imgs/assets/p3.jpg')}}" alt="">
					<h4>Chicles</h4>
				</div>
				<div class="col-md-3 text-center">
					<img class="productos-principal" src="{{asset('imgs/assets/p4.jpg')}}" alt="">
					<h4>Caramelos</h4>
				</div>
			</div>
		</div>
	</div>

	<div class="container-fluid">
		<div class="row text-center">
			<div class="col-md-offset-1 col-md-3">
				<h4>Información del diario</h4>
				<p class="">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Fugiat quae autem placeat repudiandae velit ipsum, ad cum incidunt consequatur neque in nam quidem, facilis quam quas aut dolore possimus pariatur vel, dicta suscipit sed. Consequatur.</p>
			</div>
			<div class="col-md-2">
				<h4>Dirección</h4>
				<address>
					Caracas <br>
					Montalban <br>
					Venezuela <br>
					1030
				</address>
			</div>
			<div class="col-md-4">
				<h4>Escríbenos</h4>

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
	</div>

	@include('layouts.seccion-suscripcion')

	@stop

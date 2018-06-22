@extends('layouts.master')

@section('title', 'Registro Natural')

@section('contenido')

<div class="container">
	<div class="row">
		<div class="col-md-offset-3 col-md-6">
			<div class="contenedor-fomulario">
				<h1 class="text-center estilo-escabezado-registro titulos-principales">Registro de usuario natural</h1>
				
				<form action="/clientenatural" class="form-group" method="POST" enctype="multipart/form-data" onsubmit="return validar();">
				@csrf

				<label for="">RIF</label>
					<div class="form-group">
						<input id="rif" type="text" class="form-control input-lg" name= "c_n_rif" placeholder="Rif" />
					</div>

				<label for=""> Cedula de Identidad</label>
					<div class="form-group">
					    <input id= "cedula" type="text" class="form-control input-lg" name= "c_n_cedula" placeholder="Cedula de identidad" />
					</div>

				    <label for=""> Telefono</label>

					<div id="dynamicDiv" class="form-group">
					<p>
						<input id="numero" type="text" class="form-control input-lg" name= "telefono[]" placeholder="Telefono"/>
			        </p>
			        </div>

					<a class="btn btn-primary" href="javascript:void(0)" id="addInput">
						<span class="glyphicon glyphicon-plus" aria-hidden="true"></span>	
						Adicionar más...
					</a>
					<p> </p>

				<label for=""> Primer Nombre</label>
					<div class="form-group">
					    <input id= "nombre1" type="text" class="form-control input-lg" name= "c_n_pnombre" placeholder="Primer nombre"/>
					</div>

				<label for=""> Segundo Nombre</label>
					<div class="form-group">
					    <input id= "nombre2"  type="text" class="form-control input-lg" name= "c_n_snombre" placeholder="Segundo nombre"/>
					</div>
				
				<label for=""> Primer Apellido</label>
					<div class="form-group">
					    <input id = "apellido1" type="text" class="form-control input-lg" name= "c_n_papellido" placeholder="Primer apellido"/>
					</div>

				<label for=""> Segundo Apellido</label>
					<div class="form-group">
					    <input id = "apellido2" type="text" class="form-control input-lg" name= "c_n_sapellido" placeholder="Segundo apellido"/>
					</div>

				<label for=""> Correo Electronico</label>
					<div class="form-group">
					    <input id = "correo" type="text" class="form-control input-lg" name= "c_n_correo" placeholder="Email"/>
					</div>

				<label for=""> Direccion de Habitación</label>
					<div class="form-group">
					    <input id = "direccion" type="text" class="form-control input-lg" name= "fk_lugar" placeholder="Dirección de habitación"/>
					</div>	

				<div class="form-group">
						<label for="">Avatar: </label>
						<input type="file" name= "c_n_avatar" />

					
					@if($errors->any())
						<div class="alert alert-danger">
							@foreach($errors->all() as $error)				
							<ul>	
									<li> {{$error}} </li>
							</ul>
							@endforeach
					 	</div>
					@endif
					

				</div>

					
	
			<div class="contenedor-formulario">
				<label for=""> Registro Usuario</label>
					<div class="col-md-12">
						<div class="form-group">
						    <input id="usuario" type="text" class="form-control input-lg" name="u_username" placeholder="Username" />
						    
						    <input id = "password" type="password" class="form-control input-lg" name="u_password" placeholder="Contraseña"/>
						</div>

					</div>
				
			</div>
			
			<div class="form-group">
			<button type="submit" class="btn btn-block btn-lg btn-primary">Guardar</button>	
			</div>

	        </form>

		</div>
		<script>
			$(function () {
			    var scntDiv = $('#dynamicDiv');
			    $(document).on('click', '#addInput', function () {
			        $('<p>'+'<label for=""> Otro Contacto</label>'+
		        		'<input type="text" style=" margin-bottom: 10px; "  class= "form-control input-lg" id="inputeste" name="telefono[]"  placeholder="Telefono" /> '+
		        		'<a class="btn btn-danger" href="javascript:void(0)" id="remInput">'+
							'<span class="glyphicon glyphicon-minus" aria-hidden="true"></span> '+
							'Quitar Campo'+
		        		'</a>'+
					'</p>').appendTo(scntDiv);
			        return false;
			    });
			    $(document).on('click', '#remInput', function () {
		            $(this).parents('p').remove();
			        return false;
			    });
			});
			</script>

	</div>
</div>

 <script src="{{ asset('/js/validaciones-natural.js') }}"></script>
@stop
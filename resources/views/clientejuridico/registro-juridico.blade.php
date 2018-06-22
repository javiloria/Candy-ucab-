@extends('layouts.master')

@section('title', 'Registro Jurídico')

@section('contenido')

	<div class="container">
	<div class="row">
		<div class="col-md-offset-3 col-md-6">
			<div class="contenedor-fomulario">
				<h1 class="text-center estilo-escabezado-registro titulos-principales">Registro de usuario juridico</h1>

			<form action="/clientejuridico" class="form-group" method="POST" enctype="multipart/form-data" onsubmit="return validar();">
			@csrf

			<label for="">RIF</label>
				<div class="form-group">
					<input id="rif" type="text" class="form-control input-lg" name= "c_j_rif" placeholder="Rif" />
				</div>

			<label for=""> Razon Social</label>
				<div class="form-group">
				    <input id="razonsocial" type="text" class="form-control input-lg" name= "c_j_razonsocial" placeholder="Razon Social" />
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

			<label for=""> Denominacion Comercial</label>
				<div class="form-group">
				    <input id="dcomercial" type="text" class="form-control input-lg" name= "c_j_dcomercial" placeholder="Denominacion Comercial"/>
				</div>

			<label for=""> Capital</label>
				<div class="form-group">
				    <input id="capital" type="text" class="form-control input-lg" name= "c_j_capital" placeholder="Capital"/>
				</div>

			<label for=""> Persona Contacto</label>

			    <div id="dynamicDiv2">
				<p>
					<input id = "contacto" type="text" class="form-control input-lg" name= "nombre[]" placeholder="Nombre"/>

					<input id = "descripcion" type="text" class="form-control input-lg" name= "descripcion[]" placeholder="Descripcion"/>

		        </p>
		        </div>

				<a class="btn btn-primary" href="javascript:void(0)" id="addInput2">
					<span class="glyphicon glyphicon-plus" aria-hidden="true"></span>
					Adicionar más...
				</a>
			    <p> </p>

			<label for=""> Sitio Web</label>
				<div class="form-group">
				    <input id="sitioweb" type="text" class="form-control input-lg" name= "c_j_sitioweb" placeholder="Sitio Web"/>
				</div>

			<label for=""> Correo Electronico</label>
				<div class="form-group">
				    <input id="correo" type="text" class="form-control input-lg" name= "c_j_correo" placeholder="Email"/>
				</div>

			<label for=""> Direccion Fiscal Principal</label>
				<div class="form-group">
				    <input id="direccionPrincipal" type="text" class="form-control input-lg" name= "l_lugarprin" placeholder="Dirección de habitación"/>
				</div>

			<label for=""> Direccion Fiscal</label>
				<div class="form-group">
				    <input id="direccionSecundaria" type="text" class="form-control input-lg" name= "l_lugarsec" placeholder="Dirección de habitación"/>
				</div>

			<div class="form-group">
					<label for="">Avatar: </label>
					<input type="file" name= "c_j_avatar" />
			</div>


			<div class="contenedor-formulario">
				<label for=""> Registro Usuario</label>
					<div class="col-md-12">
						<div class="form-group">
						    <input id="usuario" type="text" class="form-control input-lg" name="u_username" placeholder="Username"/>
						    <input id="password" type="password" class="form-control input-lg" name="u_password" placeholder="Contraseña"/>
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
			        $('<p>'+'<label for=""> Otro Telefono</label>'+
		        		'<input type="text" class="form-control input-lg" style=" margin-bottom: 10px; " id="inputeste" name="telefono[]"  placeholder="Telefono" /> ' +
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



		<script>
			$(function () {
			    var scntDiv = $('#dynamicDiv2');
			    $(document).on('click', '#addInput2', function () {
			        $('<p>'+'<label for=""> Otro Contacto </label>'+
		        		'<input type="text"  id="inputeste" class = "form-control input-lg" name="nombre[]"  placeholder="Nombre" /> ' + '<input type="text" class="form-control input-lg" style=" margin-bottom: 10px; "   name= "descripcion[]" placeholder="Descripcion"/>'+
		        		'<a class="btn btn-danger" href="javascript:void(0)" id="remInput2">'+
							'<span class="glyphicon glyphicon-minus" aria-hidden="true"></span> '+
							'Quitar Campo'+
		        		'</a>'+
					'</p>').appendTo(scntDiv);
			        return false;
			    });
			    $(document).on('click', '#remInput2', function () {
		            $(this).parents('p').remove();
			        return false;
			    });
			});
			</script>

	</div>
</div>

<script src="{{ asset('/js/validaciones-juridico.js') }}"></script>

@stop

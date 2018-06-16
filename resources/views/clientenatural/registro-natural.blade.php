@extends('layouts.master')

@section('title', 'Registro jurídico')

@section('contenido')

	<div class="container">
	<div class="row">
		<div class="col-md-offset-3 col-md-6">
			<div class="contenedor-fomulario">
				<h1 class="text-center estilo-escabezado-registro titulos-principales">Registro de usuario natural</h1>
				
			<form action="/clientenatural" class="form-group" method="POST">
			@csrf
				<div class="form-group">
					<input type="text" class="form-control input-lg" name= "c_n_rif" placeholder="Rif" required/>
				</div>

				<div class="form-group">
				    <input type="text" class="form-control input-lg" name= "c_n_cedula" placeholder="Cedula de identidad" required/>
				</div>

				<div class="form-group">
				    <input type="text" class="form-control input-lg" name= "t_numero" placeholder="Telf 1"/>
				</div>

				<div class="form-group">
				    <input type="text" class="form-control input-lg" name= "c_n_pnombre" placeholder="Primer nombre"/>
				</div>

				<div class="form-group">
				    <input type="text" class="form-control input-lg" name= "c_n_snombre" placeholder="Segundo nombre"/>
				</div>

				<div class="form-group">
				    <input type="text" class="form-control input-lg" name= "c_n_papellido" placeholder="Primer apellido"/>
				</div>

				<div class="form-group">
				    <input type="text" class="form-control input-lg" name= "c_n_sapellido" placeholder="Segundo apellido"/>
				</div>

				<div class="form-group">
				    <input type="text" class="form-control input-lg" name= "c_n_correo" placeholder="Email"/>
				</div>

				<div class="form-group">
				    <input type="text" class="form-control input-lg" name= "fk_lugar" placeholder="Dirección de habitación"/>
				</div>	
			</div>

			<div class="contenedor-formulario">
				
					<div class="col-md-12">
						<div class="form-group">
						    <input type="text" class="form-control input-lg" name="u_username" placeholder="Username"/>
						</div>

						<div class="form-group">
						    <input type="password" class="form-control input-lg" name="u_password" placeholder="Contraseña"/>
						</div>

					</div>
				
			</div>
			
			<div class="form-group">
			<button type="submit" class="btn btn-block btn-lg btn-primary">Guardar</button>	
			</div>

	        </form>

		</div>
	</div>
</div>


@stop
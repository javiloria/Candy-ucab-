@extends('layouts.master')

@section('title', 'Registro jurídico')

@section('contenido')

<div class="container">
	<div class="row">
		<div class="col-md-offset-3 col-md-6">
			<div class="contenedor-fomulario">
				<h1 class="text-center estilo-escabezado-registro titulos-principales">Registro de usuario natural</h1>
				<div class="form-group">
					<input type="text" class="form-control input-lg" placeholder="Rif"/>
				</div>

				<div class="form-group">
				    <input type="text" class="form-control input-lg" placeholder="Cedula de identidad"/>
				</div>

				<div class="form-group">
				    <input type="text" class="form-control input-lg" placeholder="Telf 1"/>
				</div>

				<div class="form-group">
				    <input type="text" class="form-control input-lg" placeholder="Telf 2 (opcional)"/>
				</div>

				<div class="form-group">
				    <input type="text" class="form-control input-lg" placeholder="Primer nombre"/>
				</div>

				<div class="form-group">
				    <input type="text" class="form-control input-lg" placeholder="Segundo nombre"/>
				</div>

				<div class="form-group">
				    <input type="text" class="form-control input-lg" placeholder="Primer apellido"/>
				</div>

				<div class="form-group">
				    <input type="text" class="form-control input-lg" placeholder="Segundo apellido"/>
				</div>

				<div class="form-group">
				    <input type="text" class="form-control input-lg" placeholder="Dirección de habitación"/>
				</div>	
			</div>

			<div class="contenedor-formulario">
				
					<div class="col-md-12">
						<div class="form-group">
						    <input type="text" class="form-control input-lg" placeholder="Email"/>
						</div>

						<div class="form-group">
						    <input type="text" class="form-control input-lg" placeholder="Confirmar Email"/>
						</div>

						<div class="form-group">
						    <input type="text" class="form-control input-lg" placeholder="Contraseña"/>
						</div>

						<div class="form-group">
						    <input type="text" class="form-control input-lg" placeholder="Confirmar contraseña"/>
						</div>	
					</div>
				
			</div>

			<div class="form-group">
	            <input type="submit" class="btn btn-block btn-lg btn-primary" value="Registrar"/>
	        </div>
		</div>
	</div>
</div>

@stop
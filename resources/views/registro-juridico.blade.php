@extends('layouts.master')

@section('title', 'Registro jurídico')

@section('contenido')

<div class="container">
	<div class="row">
		<div class="col-md-offset-3 col-md-6">
			<div class="contenedor-fomulario">
				<h1 class="text-center estilo-escabezado-registro titulos-principales">Registro de usuario jurídico</h1>
				<div class="form-group">
					<input type="text" class="form-control input-lg" placeholder="Rif"/>
				</div>

				<div class="form-group">
				    <input type="text" class="form-control input-lg" placeholder="Denominación comercial"/>
				</div>

				<div class="form-group">
				    <input type="text" class="form-control input-lg" placeholder="Telf 1"/>
				</div>

				<div class="form-group">
				    <input type="text" class="form-control input-lg" placeholder="Telf 2 (opcional)"/>
				</div>

				<div class="form-group">
				    <input type="text" class="form-control input-lg" placeholder="Página web"/>
				</div>

				<div class="form-group">
				    <input type="text" class="form-control input-lg" placeholder="Capital disponible"/>
				</div>

				<div class="form-group">
				    <input type="text" class="form-control input-lg" placeholder="Persona de contacto 1"/>
				</div>

				<div class="form-group">
				    <input type="text" class="form-control input-lg" placeholder="Persona de contacto 2"/>
				</div>

				<div class="form-group">
				    <input type="text" class="form-control input-lg" placeholder="Dirección fiscal principal"/>
				</div>

				<div class="form-group">
				    <input type="text" class="form-control input-lg" placeholder="Dirección fiscal"/>
				</div>

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
				<br>
				
			</div>
			<div class="form-group">
	                 <input type="submit" class="btn btn-block btn-lg btn-primary" value="Registrar"/>
	            </div>
		</div>
	</div>
</div>

@stop
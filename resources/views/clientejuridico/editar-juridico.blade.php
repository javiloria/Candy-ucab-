@extends('layouts.menuadmin')

@section('title', 'Actualización de Jurídico')

@section('contenido')

	<div class="container">
	<div class="row">
		<div class="col-md-offset-3 col-md-6">
			<div class="contenedor-fomulario">
				<h1 class="text-center estilo-escabezado-registro titulos-principales">Registro de usuario juridico</h1>
				
			<form action="/clientejuridico/{{$clientejuridico->fk_usuario}}" class="form-group" method="POST" enctype = "multipart/form-data">
			@method('PUT')
			@csrf

			<label for=""> Razon Social</label>
				<div class="form-group">
				    <input type="text" class="form-control input-lg" value= "{{$clientejuridico->c_j_razonsocial}}" name= "c_j_razonsocial" placeholder="Razon Social" required/>
				</div>

			<label for=""> Denominacion Comercial</label>
				<div class="form-group">
				    <input type="text" class="form-control input-lg" value= "{{$clientejuridico->c_j_dcomercial}}" name= "c_j_dcomercial" placeholder="Denominacion Comercial"/>
				</div>

			<label for=""> Capital</label>
				<div class="form-group">
				    <input type="text" class="form-control input-lg" value= "{{$clientejuridico->c_j_capital}}" name= "c_j_capital" placeholder="Capital"/>
				</div>

			<label for=""> Sitio Web</label>
				<div class="form-group">
				    <input type="text" class="form-control input-lg" value= "{{$clientejuridico->c_j_sitioweb}}" name= "c_j_sitioweb" placeholder="Sitio Web"/>
			</div>	

			<label for=""> Correo Electronico</label>
				<div class="form-group">
				    <input type="text" class="form-control input-lg" value= "{{$clientejuridico->c_j_correo}}" name= "c_j_correo" placeholder="Email"/>
				</div>

			<div class="form-group">
					<label for="">Avatar: </label>
					<input type="file" name= "c_j_avatar" value= "{{$clientejuridico->c_j_avatar}}" />
			</div>

			<div class="form-group">
			<button type="submit" class="btn btn-block btn-lg btn-primary">Actualización</button>	
			</div>

	        </form>

		</div>

	</div>
</div>


@stop
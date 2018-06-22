@extends('layouts.master')

@section('title', 'Actualizar CLiente Natural')

@section('contenido')

		<div class="container">
	<div class="row">
		<div class="col-md-offset-3 col-md-6">
			<div class="contenedor-fomulario">
				<h1 class="text-center estilo-escabezado-registro titulos-principales">Actualización de usuario natural
				</h1>
				
			<form class="form-group" method="POST" action = "/clientenatural/{{$clientenatural->fk_usuario}}" enctype="multipart/form-data" >
			@method('PUT')
			@csrf


				<label for="">Primer Nombre</label>
				<div class="form-group">
				    <input type="text" class="form-control input-lg" value="{{$clientenatural->c_n_pnombre}}" name= "c_n_pnombre" placeholder="Primer nombre"/>
				</div>


				<label for="">Segundo Nombre</label>
				<div class="form-group">
				    <input type="text" class="form-control input-lg" value="{{$clientenatural->c_n_snombre}}" name= "c_n_snombre" placeholder="Segundo nombre"/>
				</div>

				<label for="">Primer Apellido</label>
				<div class="form-group">
				    <input type="text" class="form-control input-lg" value="{{$clientenatural->c_n_papellido}}" name= "c_n_papellido" placeholder="Primer apellido"/>
				</div>

				<label for="">Segundo Apellido</label>
				<div class="form-group">
				    <input type="text" class="form-control input-lg" name= "c_n_sapellido" value="{{$clientenatural->c_n_sapellido}}" placeholder="Segundo apellido"/>
				</div>

				<label for="">Correo Electronico</label>
				<div class="form-group">
				    <input type="text" class="form-control input-lg" value="{{$clientenatural->c_n_correo}}" name= "c_n_correo" placeholder="Email"/>
				</div>

				<div class="form-group">
					<label for="">Avatar: </label>
					<input type="file" name= "c_n_avatar" value= "{{$clientenatural->c_n_avatar}}" />
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
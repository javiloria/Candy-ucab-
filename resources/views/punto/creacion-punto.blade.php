@extends('layouts.menuadmin')


@section('title', 'Creación de Punto')

@section('contenido')


<div class="container">
	<div class="row">
		<div class="col-md-offset-3 col-md-6">
			<div class="contenedor-fomulario">
				<h1 class="text-center estilo-escabezado-registro titulos-principales">Creación de Puntos</h1>
				
				<form action="/punto" class="form-group" method="POST" onsubmit="return validar();">
				@csrf
				<label for=""> Valor</label>
					<div class="form-group">
					    <input id= "valor" type="text" class="form-control input-lg" name= "pu_valor" placeholder="Valor del Punto" />
					</div>

				<label for=""> Descripción </label>
					<div class="form-group">
					    <input id= "descripcion" type="text" class="form-control input-lg" name= "pu_descripcion" placeholder="Descripción"/>
					</div>

				<label for=""> Usuario que Obtendra los Puntos</label>

					<div class="form-group">
					    <input id= "usuario"  type="text" class="form-control input-lg" name= "fk_usuario" placeholder="Nombre de Usuario"/>
					</div>

					<div class="form-group">
						<button type="submit" class="btn btn-block btn-lg btn-primary">Enviar Punto</button>	
					</div>

				</form>	
       		</div>
       	</div>
	</div>
</div>

@stop
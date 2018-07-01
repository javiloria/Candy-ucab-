@extends('layouts.menuadmin')

@section('title', 'Actualizar CLiente Natural')

@section('contenido')

		<div class="container">
	<div class="row">
		<div class="col-md-offset-3 col-md-6">
			<div class="contenedor-fomulario">
				<h1 class="text-center estilo-escabezado-registro titulos-principales">Actualización de Rol usuario 
				</h1>
				
			<form class="form-group" method="POST" action = "/usuario/{{$id}}" enctype="multipart/form-data" >
			@method('PUT')
			@csrf

				<div class="form-group">
				<h2> Usuario:</h2>
				<h3> {{$id}}</h3>
			</div>
				<div class="form-group">
				<label for="">Rol: </label>
            <select name="rol">


              @foreach($roles as $rol)
                 <option  value="{{$rol->id}}">{{$rol->name}} </option>
                 
                @endforeach

            </select>

					
				</div>

			
			<div class="form-group">
			<button type="submit" class="btn btn-block btn-lg btn-primary">Guardar</button>	
			</div>

	        </form>

		</div>
	</div>
</div>
		
@stop
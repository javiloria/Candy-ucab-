@extends('layouts.menuadmin')

@section('title', 'Usuari')

@section('contenido')

    
	
	<div class="text-center">
		<h2 class="card-title">{{$usuario->u_username}} </h2>
		<h5 class="text-center">
			
			

		</h5>
		<a href="/usuario/{{$usuario->u_username}}/edit" class="btn btn-primary">
		Cambiar Rol
		</a> <p> </p>

	</div> <br></br>

@stop
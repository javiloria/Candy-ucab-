@extends('layouts.menuadmin')

@section('title', 'Registro jurídico')

@section('contenido')

<div class="container text-center" id="contenedorElias">
	<div class="row">
			@foreach($clientesjuridicos as $clientejuridico)
				<div class="col-sm">
						<div class="card text-center" id="contenedorCarta">
						<img id= "imagen-carta" class="card-img-top rounded-circle mx-auto d-block" src="/images/{{$clientejuridico->c_j_avatar}}" alt="">
					        <div class="card-body">
						        <h2 class="card-title">{{$clientejuridico->c_j_razonsocial}}</h2>
						        <a href="/clientejuridico/{{$clientejuridico->fk_usuario}}" class="btn btn-primary">Ver Perfil</a>
					  		</div>
						</div>
				</div>
			@endforeach
	</div>
</div>

@stop
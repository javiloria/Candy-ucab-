@extends('layouts.master')

@section('title', 'Vista Cliente Natural')

@section('contenido')

<div class="container text-center" id="contenedorElias">
	<div class="row">
			@foreach($clientesnaturales as $clientenatural)
				<div class="col-sm">
						<div class="card text-center" id="contenedorCarta">
							<img id= "imagen-carta" class="card-img-top rounded-circle mx-auto d-block" src="/images/{{$clientenatural->c_n_avatar}}" alt="">
					        <div class="card-body">
						        <h2 class="card-title">{{$clientenatural->c_n_pnombre}} {{$clientenatural->c_n_papellido}}</h2>

						        <a href="/clientenatural/{{$clientenatural->fk_usuario}}" class="btn btn-primary">Ver Perfil</a>
					  		</div>
						</div>
				</div>
			@endforeach
	</div>
</div>

@stop
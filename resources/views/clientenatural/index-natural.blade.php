@extends('layouts.master')

@section('title', 'Registro jurídico')

@section('contenido')

<div class="container text-center" id="contenedorElias">
	<div class="row">
			@foreach($clientenatural as $cn)

				<div class="col-sm">
						<div class="card text-center" id="contenedorCarta">

					<?php
						$usuarios = DB::table('usuario')->where('fk_clienat', $cn->c_n_rif)->get();
						foreach ($usuarios as $usuario);

						$lugares = DB::table('lugar')->where('l_cod', $cn->fk_lugar)->get();
						foreach ($lugares as $lugar);
					?>

					        <div class="card-body">
						        <h2 class="card-title">{{$cn->c_n_pnombre}} {{$cn->c_n_papellido}}</h2>
						        <h5 class="text-justify">
						        	Cedula: {{$cn->c_n_cedula}} <br>
						        	Correo: {{$cn->c_n_correo}} <br>
						        	Direccion: {{$lugar->l_nombre}}
						        </h5>
						        <a href="/clientenatural/{{$usuario->u_username}}" class="btn btn-primary">Ver Perfil</a>
					  		</div>
						</div>
				</div>
			@endforeach
	</div>
</div>


@stop
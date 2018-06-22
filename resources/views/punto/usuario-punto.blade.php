@extends('layouts.master')

@section('title', 'Vista Cliente Natural')

@section('contenido')

	<?php
		$puntostotales = 0;

		$puntos = DB::table('punto')->where('fk_usuario', $punto->fk_usuario)->get();
		foreach ($puntos as $pts) {
			$puntostotales = $puntostotales + $pts->pu_valor;
		}

	?>
<div class="container text-center" id="contenedorElias">
	<div class="row">
	<div class="card col-sm text-center" 
	style="margin-top: 30px; background-color: #B9E3D9" 
	id="contenedorCarta">
			    <h2>{{$punto->fk_usuario}}</h2>	
			    <b> Los puntos ganados por este cliente son: </b> <p> </p>
			    <b> {{$puntostotales}} </b>
	</div>
</div>
</div>

@stop
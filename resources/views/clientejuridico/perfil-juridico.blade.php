@extends('layouts.master')

@section('title', 'Perfil Cliente Juridico')

@section('contenido')

    <?php

    	$lugs_jurs = DB::table('lug_jur')->where('lj_clientejuridico', $clientejuridico->c_j_rif)->get();

	   $telefonos = DB::table('telefono')->where('fk_clientejuridico', $clientejuridico->c_j_rif)->get();
    ?>

	<img id= "imagen-carta" class="card-img-top rounded-circle mx-auto d-block" src="/images/{{$clientejuridico->c_j_avatar}}" alt="">
	<div class="text-center">
		<h2 class="card-title">{{$clientejuridico->d_comercial}}</h2>
		<h5 class="text-center">
			RIF: {{$clientejuridico->c_j_rif}} <br>
			Razon Social: {{$clientejuridico->razonsocial}} <br>
			Capital: {{$clientejuridico->c_j_capital}} <br>
			Sitio Web: {{$clientejuridico->c_j_sitioweb}} <br>
			Correo: {{$clientejuridico->c_j_correo}} <br>
			Telefono:

			@foreach ($telefonos as $telefono)
				 {{$telefono->t_numero}} <br>
			@endforeach

			Lugar: 
			<?php
			foreach ($lugs_jurs as $lug_jur){

				$lugares = DB::table('lugar')->where('l_cod', $lug_jur->lj_lugar)->get();
				foreach ($lugares as $key => $lugar);
			    echo $lugar->l_nombre."<br>";
			}
			?>
		</h5>
		<a href="/clientejuridico/{{$clientejuridico->fk_usuario}}/edit" class="btn btn-primary">
		Actualizar
		</a> 

		{!! Form::open(['route'=>['clientejuridico.destroy',$clientejuridico->fk_usuario],'method'=>'DELETE' ]) !!}
    	{!! Form::submit('Eliminar',['class'=>'btn btn-danger']) !!}
   		{!! Form::close() !!}

	</div> <br></br>

@stop
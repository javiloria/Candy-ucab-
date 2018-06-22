@extends('layouts.master')

@section('title', 'Perfil Cliente Natural')

@section('contenido')

    <?php

       $lugares = DB::table('lugar')->where('l_cod', $clientenatural->fk_lugar)->get();
       foreach ($lugares as $lugar);

	   $telefonos = DB::table('telefono')->where('fk_clientenatural', $clientenatural->c_n_rif)->get();
    ?>

	<img id= "imagen-carta" class="card-img-top rounded-circle mx-auto d-block" src="/images/{{$clientenatural->c_n_avatar}}" alt="">
	<div class="text-center">
		<h2 class="card-title">{{$clientenatural->c_n_pnombre}} {{$clientenatural->c_n_papellido}}</h2>
		<h5 class="text-center">
			RIF: {{$clientenatural->c_n_rif}} <br>
			Segundo Nombre: {{$clientenatural->c_n_snombre}} <br>
			Segundo Apellido: {{$clientenatural->c_n_sapellido}} <br>
			Cedula: {{$clientenatural->c_n_cedula}} <br>
			Correo: {{$clientenatural->c_n_correo}} <br>
			Telefono: 
			@foreach ($telefonos as $telefono)
			   {{$telefono->t_numero}} <br>
			@endforeach
			Lugar: {{$lugar->l_nombre}}

		</h5>
		<a href="/clientenatural/{{$clientenatural->fk_usuario}}/edit" class="btn btn-primary">
		Actualizar
		</a> <p> </p>

		{!! Form::open(['route'=>['clientenatural.destroy',$clientenatural->fk_usuario],'method'=>'DELETE' ]) !!}
    	{!! Form::submit('Eliminar',['class'=>'btn btn-danger']) !!}
   		{!! Form::close() !!}

	</div> <br></br>

@stop
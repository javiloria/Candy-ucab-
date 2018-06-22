@extends('layouts.master')

@section('title', 'Vista Cliente Natural')

@section('contenido')

<div class="container" id="contenedorElias">
	<div class="row">
			<?php
			$clientenaturals = DB::table('clientenatural')->where('c_n_rif', $carnet->fk_clientenatural)->get();
			foreach ($clientenaturals as $clientenatural);

			$tiendas = DB::table('tienda')->where('t_cod', $clientenatural->fk_tienda)->get();
			foreach ($tiendas as $tienda);
			?>
				<div class="col-sm ">
						<div class="card2" style=" margin-left: 250px; background-image: url('../imgs/assets/bg2.jpg');" id="contenedorCarta2">
							<div class="card-body1 text-letf" style= "float: left;">
							<img id= "imagen-carta3" style src="/imgs/sweet.png" alt="">
							<b> {{$tienda->t_cod}} - 0000000{{$carnet->c_numero}} </b>
					  		</div>
							<div id="box">
								<div id="box">
							<b> {{$tienda->t_nombre}} <br>
							<b> Nombre: </b> {{$carnet->c_nombre}}  <br>
						    <b> Apellido: </b> {{$carnet->c_apellido}} <br>
						    <b> Cedula: </b> {{$clientenatural->c_n_cedula}}
						        </div>
							<img id= "imagen-carta2" style src="/images/{{$clientenatural->c_n_avatar}}" alt="">
							</div>

						</div>
				</div>
	</div>
</div>

@stop
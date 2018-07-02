@extends('layouts.master')

@section('title', 'Registro Natural')

@section('contenido')

<div class="container">
	<div class="row">
		<div class="col-md-offset-3 col-md-6">
			<div class="contenedor-fomulario">
				<h1 class="text-center titulos-principales" style="margin-top: -35px">Modificacion de Oferta</h1>

				<?php 
				$descuentos = DB::table('descuento')->where('fk_oferta1', $oferta->o_id)->get();
		        foreach ($descuentos as $descuento);
				?>
				
				<form action="/oferta/{{$oferta->o_id}}" class="form-group" method="POST" >
				@method('PUT')
				@csrf	
			    <p></p>
				<div class="card text-center" style="margin-top: -5px;
				                 background-color: #F8E0E0; " id="contenedorCarta">
					
					 <input type="text" class="form-control input-lg" name= "o_descripcion" value="{{$oferta->o_descripcion}}" placeholder="Descripcion de Oferta" />

					 <input type="text" value="{{$descuento->d_porcentaje}}" class="form-control input-lg" name= "o_porcentaje" placeholder="Porcentaje de Descuento" />
					
				</div> <p></p>
				<p></p>
					<div class="">
					<button type="submit" class="btn btn-block btn-lg btn-primary">Registrar a Tienda</button>	
					</div>
	        </form>

	</div>
</div>
@stop
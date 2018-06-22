@extends('layouts.master')

@section('title', 'Registro Natural')

@section('contenido')

<div class="container">
	<div class="row">
		<div class="col-md-offset-3 col-md-6">
			<div class="contenedor-fomulario">
				<h1 class="text-center titulos-principales" style="margin-top: -35px">Registro de Cliente a Tienda</h1>
				
				<form action="{{url('registro-cliente-tienda')}}" class="form-group" method="POST" >
				@csrf

				<?php                
                	$tiendas = DB::table('tienda')->get();
                ?>

				<label for="">Tiendas</label>
							<select name="t_nombre" class="form-control" style="height: 50px;" id="sel1">
								@foreach($tiendas as $tienda)
								<option>{{$tienda->t_nombre}}</option>
								@endforeach
					      	</select>
				<p></p>
				
				<label for=""> Nombre de Usuario</label>
					<div class="form-group">
					    <input type="text" class="form-control input-lg" name= "u_username" placeholder="Nombre de Usuario" />
					</div>
			
			<div class="form-group">
			<button type="submit" class="btn btn-block btn-lg btn-primary">Registrar a Tienda</button>	
			</div>

	        </form>

		</div>
	</div>
</div>
@stop
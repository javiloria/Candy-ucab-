@extends('layouts.master')

@section('title', 'Vista Cliente Natural')

@section('contenido')

<div class="container text-center" id="contenedorElias">
	<div class="row">
		<h1 class="text-center estilo-escabezado-registro titulos-principales" style="margin-bottom: -15px">Diario Dulce</h1>


	@foreach($ofertas as $oferta)

	<?php 
		$productos = DB::table('producto')->where('p_cod', $oferta->o_producto)->get();
		foreach ($productos as $producto);

		$descuentos = DB::table('descuento')->where('fk_oferta1', $oferta->o_id)->get();
		foreach ($descuentos as $descuento);
	?>
	<div class="card text-center" style="margin-left: 10px" id="contenedorCarta">
			<div class= "card-body">
				<h2> {{$descuento->d_porcentaje}} % Descuento</h2>
				<img id= "imagen-carta" class="card-img-top rounded-circle mx-auto d-block" src="{{asset('insertado/producto/'.$producto->p_imagen)}}" alt="">
				<h5 class="text-center">
				<b>Nombre:</b> {{$producto->p_nombre}} <br>
				<b>Descripcion:</b> {{$oferta->o_descripcion}} <br>
				<b>Precio:</b> {{$oferta->o_precio}} <br>
			    </h5>
			    <form  action="/presupuestos" method="POST" class="form-group" >
              @csrf
			     <input type="checkbox" name='carrito[]' value="{{$producto->p_cod}}"> <b> {{ __('Agregar al Carrito') }} </b>
			     <p> </p>

				@if(Auth::user()->hasRole('admin'))
				
				<a href="/oferta/{{$oferta->o_id}}/edit" class="btn btn-primary">
				Actualizar
				</a>
				
				 <p> </p>
				{!! Form::open(['route'=>['oferta.destroy',$oferta->o_id],'method'=>'DELETE' ]) !!}
		    	{!! Form::submit('Eliminar',['class'=>'btn btn-danger']) !!}
		   		{!! Form::close() !!}
				@endif

				<p> </p>

			</div>
	</div>

	@endforeach

</div>
</div>

		    <div class="form-group text-center">
			<button type="submit" class="btn  btn-lg btn-primary">Realizar Compra</button>
			</div>
		</form>
@stop
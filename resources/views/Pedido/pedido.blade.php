@extends('layouts.master')

@section('title', 'Pedido')

@section('contenido')
<?php $monto=0; ?>
<div class="text-center">
	Nombre                   ------------>     Precio
	@foreach($prode as $pres)
	<?php   $pro= DB::table('producto')->where('p_cod', $pres->fk_prod_cod)->get();           ?>
	@foreach($pro as $prod)
	<p></p>
	{{ $prod->p_nombre  }}   ------------->    {{ $prod->p_precio }}
	<?php $monto=$monto+ $prod->p_precio ?>
	@endforeach

	@endforeach
	<p></p>
	------------------------------------------------------------------------------------
	

	


	<p></p>
	Sub total  ---------> {{ $monto*0.88}} 
	<p></p>
	iva        ---------> {{ $monto*0.12}} 
	<p></p>
	<p></p>
	Total a pagar   ------------> {{ $monto}} 
</div>

<a class="btn btn-primary btn-lg botoncito" href="/pedido/pagar">Pagar</a>

@include('layouts.seccion-suscripcion')

@stop

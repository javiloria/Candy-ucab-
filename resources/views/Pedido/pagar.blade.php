@extends('layouts.master')

@section('title', 'Pagar')

@section('contenido')


<div class="text-center">

	<h1> Por Favor Seleccione su metodo de Pago		</h1>
	<a class="btn btn-primary btn-lg botoncito" href="#">Punto</a>
	<a class="btn btn-primary btn-lg botoncito" href="#">Efectivo</a>
	<a class="btn btn-primary btn-lg botoncito" href="/cheque/create">Cheque</a>
	<a class="btn btn-primary btn-lg botoncito" href="/credito/create">Tarjeta Credito</a>
	<a class="btn btn-primary btn-lg botoncito" href="/debito/create">Tarjeta Debito</a>

</div>

@include('layouts.seccion-suscripcion')

@stop

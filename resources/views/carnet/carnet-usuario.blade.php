@extends('layouts.master')

@section('title', 'Vista Cliente Natural')

@section('contenido')

<div class="text-center">

	<h1> Cliente Registrado Satisfactoriamente </h1>

	<div class="form-group">
			<a href="/registro-cliente-tienda/{{$carnet->c_numero}}" class="btn btn-primary"> Ver Carnet </a>
	</div>

</div>

@stop
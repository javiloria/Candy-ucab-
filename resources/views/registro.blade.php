@extends('layouts.master')

@section('title', 'Registro jurídico')

@section('contenido')

<div class="container">
	<div class="row">
		<h1 class="text-center estilo-escabezado-registro titulos-principales">Registro de usuario</h1>
		<div class="col-md-12 contenedor-tipo-usuario">
			<div class="contenedor-usuario">
				<a class="" href="/clientenatural/create">Natural <br>
				<i class="fa fa-user-circle-o" aria-hidden="true"></i></a>
			</div>
			<div class="contenedor-usuario">
				<a href="/clientejuridico/create">Jurídico <br>
				<i class="fa fa-user-plus" aria-hidden="true"></i></a>
			</div>
		</div>
	</div>
</div>

@stop

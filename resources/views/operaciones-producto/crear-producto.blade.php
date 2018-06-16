@extends('layouts.master')

@section('title', 'Crear producto')

@section('contenido')

	<div class="container">
		<div class="row">
			<div class="col-md-12 text-center">
				<h1 class="titulos-principales">Crear productos</h1>
			</div>
		</div>

		<div class="row">
			<div class="col-md-offset-4 col-md-4">

				<div class="modal-body">
	             <div class="form-group">
	                 <input type="text" class="form-control input-lg" placeholder="Nombre del producto"/>
	             </div>
	             <div class="form-group">
	                 <input type="text" class="form-control input-lg" placeholder="Cantidad"/>
	             </div>
	             <div class="form-group">
	                 <input type="text" class="form-control input-lg" placeholder="Precio"/>
	             </div>

	             <div class="form-group">
	                 <textarea class="form-control input-lg" placeholder="Descripción del producto"></textarea> 
	             </div>

	             <div class="form-group">
	                 <input type="submit" class="btn btn-block btn-lg btn-primary" value="Crear producto"/>
	             </div>
	         </div>

			</div>
		</div>
	</div>
				

				


@stop
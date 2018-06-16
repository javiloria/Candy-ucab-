@extends('layouts.master')

@section('title', 'Modificar producto')

@section('contenido')

	<div class="container">
		<div class="row">
			<div class="col-md-12 text-center">
				<h1 class="titulos-principales">Modificar producto</h1>
			</div>
		</div>

		<div class="row">
			<div class="col-md-offset-4 col-md-4">

				<p>Mostrando N productos</p>

				<select style="width: 90%;text-align: center; margin: 0 auto" class="form-control" id="sel">
				<option>Seleccione el producto</option>
				<option>1</option>
				<option>2</option>
				<option>3</option>
				<option>4</option>
				</select>
						
					

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
	                 <input type="submit" class="btn btn-block btn-lg btn-primary" value="Modificar producto"/>
	             </div>
	         </div>

			</div>
		</div>
	</div>
				

				


@stop
@extends('layouts.master')

@section('title', 'Registro Natural')

@section('contenido')

<div class="container">
	<div class="row">
		<div class="col-md-offset-3 col-md-6">
			<div class="contenedor-fomulario">
				<h1 class="text-center titulos-principales" style="margin-top: -35px">Creacion del Diario Dulce</h1>
				
				<form action="/oferta" class="form-group" method="POST" >
				@csrf

				<?php                
                	$productos = DB::table('producto')->get();
                ?>
				 <div class="card text-center" style="margin-top: -5px;
				                 background-image: url('../imgs/assets/bg2.jpg');
				                 background-repeat: no-repeat;
	                             background-size: cover;
	                             background-position: center;" id="contenedorCarta">
					
						<input type="text" class="form-control input-lg" name= "d_descripcion" placeholder="Descripcion del Diario"/>
						<p></p>
						<input type="text" class="form-control input-lg" name= "d_fecini" placeholder="Fecha Inicial"/>
						<p></p>
						<input type="text" class="form-control input-lg" name= "d_fecfin" placeholder="Fecha Final"/>
						<p></p>
						<input type="text" class="form-control input-lg" name= "fk_empleado" placeholder="C.I. Empleado Encargado"/>
			       
			     </div>
			     <p></p>

			     <label>----- Creacion de Oferta -----</label>
			     <p></p>
				<div class="card text-center" style="margin-top: -5px;
				                 background-color: #F8E0E0; " id="contenedorCarta">
					
					<div id="dynamicDiv">
					
					<input id="numero" type="text" class="form-control input-lg" name= "nombre[]" placeholder="Producto"/>

					 <input type="text" class="form-control input-lg" name= "descripcion[]" placeholder="Descripcion de Oferta" />

					 <input type="text" class="form-control input-lg" name= "porcentaje[]" placeholder="Porcentaje de Descuento" />
					
					</div> <p></p>

					<a class="btn btn-primary" href="javascript:void(0)" id="addInput">
						<span class="glyphicon glyphicon-plus" aria-hidden="true"></span>
						Adicionar más...
					</a> 
				</div>
			<p></p>
					<div class="">
					<button type="submit" class="btn btn-block btn-lg btn-primary">Registrar a Tienda</button>	
					</div>
	        </form>

		</div>

		<script>
			$(function () {
			    var scntDiv = $('#dynamicDiv');
			    $(document).on('click', '#addInput', function () {
			        $('<p>'+'<label for=""> Producto</label>'+
		        		'<input type="text"  class= "form-control input-lg" id="inputeste" name="nombre[]"  placeholder="Producto" /> '+'<input type="text" class="form-control input-lg" name= "descripcion[]" placeholder="Descripcion de Oferta" />'+
		        		    '<input type="text" style=" margin-bottom: 10px; " class="form-control input-lg" name= "porcentaje[]" placeholder="Porcentaje de Descuento" />'+
		        		'<a class="btn btn-danger" href="javascript:void(0)" id="remInput">'+
							'<span class="glyphicon glyphicon-minus" aria-hidden="true"></span> '+
							'Quitar Campo'+
		        		'</a>'+
					'</p>').appendTo(scntDiv);
			        return false;
			    });
			    $(document).on('click', '#remInput', function () {
		            $(this).parents('p').remove();
			        return false;
			    });
			});
			</script>

	</div>
</div>
@stop
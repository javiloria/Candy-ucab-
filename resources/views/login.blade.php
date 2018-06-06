@extends('layouts.master')

@section('title', 'Login')

@section('contenido')

	<div class="modal-dialog contenedor-login">
	    <div class="modal-content">
	        <div class="modal-header">
	          <h1 class="text-center">Inicio de sesión</h1>
	        </div>
	         <div class="modal-body">
	             <div class="form-group">
	                 <input type="text" class="form-control input-lg" placeholder="Usuario"/>
	             </div>

	             <div class="form-group">
	                 <input type="password" class="form-control input-lg" placeholder="Contraseña"/>
	             </div>

	             <div class="form-group">
	                 <input type="submit" class="btn btn-block btn-lg btn-primary" value="Login"/>
	                 <span class="pull-right"><a href="registro">Registrar usuario</a></span>
	             </div>
	         </div>
	    </div>
 	</div>

@stop
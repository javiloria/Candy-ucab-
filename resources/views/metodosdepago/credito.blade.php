@extends('layouts.master')

@section('title', 'Pedido')

@section('contenido')

       
        <div class="container">
  <div class="row">
    <div class="col-md-offset-3 col-md-6">
      <div class="contenedor-fomulario">
        <h1 class="text-center estilo-escabezado-registro titulos-principales">Pagar con Tarjeta de Credito
        </h1>
        
      <form class="form-group" action="/credito" method="POST" >
      @csrf

        <label for="">Nombre Pedido</label>
        <div class="form-group">
            <input type="text" class="form-control input-lg" name= "nombre" placeholder="Nombre Pedido"/>
        </div>
        
        <label for="">Numero de tarjeta</label>
        <div class="form-group">
            <input type="text" class="form-control input-lg" name= "numero" placeholder="Numero"/>
        </div>


        <label for="">Efectivo</label>
        <div class="form-group">
            <input type="text" class="form-control input-lg" name= "efectivo" placeholder="Efectivo"/>
        </div>

        <label for="">Tipo </label>
        <div class="form-group">
            <input type="text" class="form-control input-lg"  name= "tipo" placeholder="Cuenta"/>
        </div>

        <label for="">Fecha vencimiento</label>
        <div class="form-group">
            <input type="text" class="form-control input-lg" name= "fechaven"  placeholder="Fecha vencimiento"/>
        </div>
        
        <label for="">Reverso de tarjeta</label>
        <div class="form-group">
            <input type="text" class="form-control input-lg" name= "numeroreverso"  placeholder="Reverso tarjeta"/>
        </div>

      </div>
      
      <div class="form-group">
      <button type="submit" class="btn btn-block btn-lg btn-primary">Guardar</button> 
      </div>

          </form>

    </div>
  </div>
</div>
    
@include('layouts.seccion-suscripcion')

@stop

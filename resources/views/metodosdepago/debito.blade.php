@extends('layouts.master')

@section('title', 'Pedido')

@section('contenido')

          
        <div class="container">
  <div class="row">
    <div class="col-md-offset-3 col-md-6">
      <div class="contenedor-fomulario">
        <h1 class="text-center estilo-escabezado-registro titulos-principales">Pagar con Debito
        </h1>
        
      <form class="form-group" action="/debito" method="POST" >
      @csrf

        <label for="">Nombre Pedido</label>
        <div class="form-group">
            <input type="text" class="form-control input-lg" name= "nombre" placeholder="Nombre Pedido"/>
        </div>

        <label for="">Numero</label>
        <div class="form-group">
            <input type="text" class="form-control input-lg" name= "numero" placeholder="Numero"/>
        </div>


        <label for="">Efectivo</label>
        <div class="form-group">
            <input type="text" class="form-control input-lg" name= "efectivo" placeholder="Efectivo"/>
        </div>

        <label for="">Tipo </label>
        <div class="form-group">
            <input type="text" class="form-control input-lg"  name= "cuenta" placeholder="Cuenta"/>
        </div>

        <label for="">Banco</label>
        <div class="form-group">
            <input type="text" class="form-control input-lg" name= "banco"  placeholder="Banco"/>
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

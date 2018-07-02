@extends('layouts.master')

@section('title', 'Pedido')

@section('contenido')

       
        <div class="container">
  <div class="row">
    <div class="col-md-offset-3 col-md-6">
      <div class="contenedor-fomulario">
        <h1 class="text-center estilo-escabezado-registro titulos-principales">Pagar con Puntos
        </h1>
        <?php $total=0;  ?>
        @foreach($punto as $pt)
        <?php  $total=$pt->valor +$total ;?>

        @endforeach
        <?php $total=$total/2?>
        <h3 class="text-center estilo-escabezado-registro ">Disponible {{$total}}
        </h3>
        
      <form class="form-group" action="{{ action('VentasController@pagarpunto') }}" method="POST" >
      @csrf
                
        <label for="">Puntos</label>
        <div class="form-group">
            <select name="punto" required>


              @foreach($punto as $p)
                 <option  value="{{$p->valor}}">{{$p->valor}} </option>
                @endforeach

            </select>
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

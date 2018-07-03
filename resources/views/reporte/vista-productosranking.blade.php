@extends('layouts.menuadmin')

@section('title', 'Clientes Frecuentes')

@section('contenido')

  <div class="container">
    <div class="row">
      <div class="col-md-12 text-center">
        <h1 class="titulos-principales">Asistencia</h1>
      </div>
    </div>
       <div class="container text-center" id="contenedorElias">
           <div class="col-sm">

            @foreach($productos as $producto)
                  <div class="card text-center" style="margin-left: 50px " id="contenedorCarta">
                          <div class="card-body">
                            <h2 class="card-title">{{$producto->p_nombre}} {{$producto->p_precio}}</h2>
                          </div>
                  </div>
             @endforeach
          </div>
       </div>
  </div>
 </form>

@stop
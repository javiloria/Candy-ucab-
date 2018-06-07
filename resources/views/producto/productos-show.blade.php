@extends('producto.productos')
@section('central')
<div class="contenedor-producto">
  <img style="height:250px; width: 250px;"src="{{asset('insertado/producto/'.$product->p_imagen)}}" alt="">
  <div class="descripcion-producto">
    <h4 >{{$producto->p_nombre}}</h4>
    <span >cod: {{$producto->p_cod}}</span>
    <span >tipo: {{$producto->p_tipo}}</span>
    <span >{{$producto->p_precio}} Bs</span>
  </div>
</div>
@stop

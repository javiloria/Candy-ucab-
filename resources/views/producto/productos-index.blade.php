@extends('producto.productos')
@section('central')
@foreach ($producto as $product)
<div class="contenedor-producto">
  <img src="{{asset('imgs/assets/p1.jpg')}}" alt="">
  <div class="descripcion-producto">
    <h4 >{{$product->p_nombre}}</h4>
    <span >cod: {{$product->p_cod}}</span>
    <span >tipo: {{$product->p_tipo}}</span>
    <span >{{$product->p_precio}} Bs</span>
  </div>
</div>
@endforeach
@stop
@section('media')
<a class="btn btn-primary btn-lg botoncito" href="/productos/create">Crear Producto</a>
@stop

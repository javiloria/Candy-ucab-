@extends('producto.productos')
@section('central')
@foreach ($producto as $product)
<div class="contenedor-producto">
    <!-- asignamos la ruta de la bas de datos a la impresion -->
  <img src="{{asset('insertado/producto/'.$product->p_imagen)}}" alt="">
  <div class="descripcion-producto">
    <h4 >nombre: {{$product->p_nombre}}</h4>
    <span >{{$product->p_precio}} Bs</span>
      <a class="btn btn-primary btn-lg botoncito" href="/productos/{{$product->p_cod}}">ver mas...</a>
  </div>
</div>
@endforeach
@stop
@section('media')
<a class="btn btn-primary btn-lg botoncito" href="/productos/create">Crear Producto</a>
@stop

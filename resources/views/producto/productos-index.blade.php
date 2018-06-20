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
          @if(Auth::user()->hasRole('user'))
<form  action="/presupuestos" method="POST" >
              @csrf
            <input type="checkbox" name='carrito[]' value= "{{$product->p_cod}}"> {{ __(' agregar al carrito') }}
        @endif
</div>
</div>
@endforeach
@stop
@section('media')
  @if(Auth::user()->hasRole('admin'))

    <a class="btn btn-primary btn-lg botoncito" href="/productos/create">Crear Producto</a>
  @elseif(Auth::user()->hasRole('user'))

  <button type="submit" class="btn btn-primary btn-lg botoncito">Agregar al carrito</button>
  </form>
  @endif

@stop
@if(Auth::user()->hasRole('user'))
@section('carrito')

  <div class="col-md-4 text-center">
    <div class="carrito">
      <h4>Carrito de productos</h4>
      <ul>
        <form  action="#" method="" >
        @csrf
        @php    $p_antes=null;   @endphp

        @foreach ($pro_pre as $p_p)
          @if($p_p!= $p_antes)
        <li>Presupuesto: {{$p_p->fk_pre_cod}}   <input type="checkbox" name='compra' value= "{{$p_p->fk_pre_cod}}"> {{ __(' si') }}</li>
         @php $p_antes=$p_p;  @endphp
      @endif
      @endforeach
      </ul>
      <button type="submit" class="btn btn-primary btn-lg botoncito">Realizar Compra</button>
      </form>
    </div>
  </div>
@stop
@endif

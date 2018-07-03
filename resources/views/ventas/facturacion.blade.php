@extends('producto.productos')
@section('central')


@foreach ($producto as $product)

<div class="card text-center" id="contenedorCarta">
    <!-- asignamos la ruta de la bas de datos a la impresion -->
  <img  id="imagen-carta"
  class="card-img-top rounded-circle mx-auto d-block" src="{{asset('insertado/producto/'.$product->p_imagen)}}" alt="">
  <div class="text-center">
    <div class="card-body">
    <h4>{{$product->p_nombre}}</h4>
    <span >{{$product->p_precio}} Bs</span>
      <a class="btn btn-primary btn-lg" href="/productos/{{$product->p_cod}}">Ver más...</a>
      <p> </p>
          @if(Auth::user()->hasRole('user'))
          <form  action="{{ action('VentasController@facturacion') }}" method="POST" class="form-group" >
              @csrf
  <input type="text" class="form-control" name="cantidad" placeholder="cantidad" >
  <input type="checkbox" name='carrito[]' value= "{{$product->p_cod}}"> {{ __('Agregar al Carrito') }}
          @endif
    </div>
</div>
</div>
@endforeach
@stop
@section('media')



        <form  action="{{ action('VentasController@facturacion') }}" method="POST" >
        @csrf
        

      <div class="form-group text-center">
			<button type="submit" class="btn  btn-lg btn-primary">Realizar Compra</button>
			</div>

      </form>
@stop


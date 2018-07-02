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
          <form  action="/presupuestos" method="POST" class="form-group" >
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
  @if(Auth::user()->hasRole('admin'))
    <div class="form-group text-center">
    <a class="btn btn-primary btn-lg botoncito" href="/productos/create">Crear Producto</a>
    </div>
  @elseif(Auth::user()->hasRole('user'))

          <div class="form-group text-center">
          
    			<button type="submit" class="btn btn-lg btn-primary">Agregar Carrito</button>

        </div> <br></br>
  </form>
  @endif

@stop
@if(Auth::user()->hasRole('user'))
@section('carrito')

  <div class="col-md-4 text-center">
    <div class="carrito">

      <div class = "text-center">
      <h2>Carrito de productos</h2>
    </div>

      <ul>
        <form  action="pedidos/crear" method="Post" >
        @csrf
        @php    $antes=0; $c=1;   @endphp

        @foreach ($pro_pre as $p_p)
          @php

          $string=json_encode($p_p);
          $porciones = explode("fk_pre_cod", $string);
          $porciones2 = explode("}", $porciones[1]);
          $porciones3 = explode(':', $porciones2[0]);
        if($porciones3[1]!=$antes){
          //esta mandando en valor correcto en la BD
        echo '<li> <b> Presupuesto: </b> '.$c.' <p></p>  <input type="checkbox" name="compra" value= "  '.$porciones3[1].'">  SI  </li>';
        //variable para que en todos los usuarios empieze en 1 los presupuestos
        $c=$c+1;
        }
         $antes= $porciones3[1];
       @endphp

      @endforeach
      </ul>

      <div class="form-group text-center">
			<button type="submit" class="btn  btn-lg btn-primary">Realizar Compra</button>
			</div>

      </form>
    </div>
  </div>
@stop
@endif

@extends('producto.productos')
@section('central')


  <img id="imagen-carta2" style="margin-top: 20px; width: 200px; height: 200px"
  class="card-img-top rounded-circle mx-auto d-block"
  src="{{asset('insertado/producto/'.$producto->p_imagen)}}" alt="">

<div class="container text-center">
<div class="text-center">

    <h1 >{{$producto->p_nombre}}</h1> <p></p>
    <span > <b> Cod: </b> {{$producto->p_cod}}</span> <br>
    <span > <b> Tipo: </b> {{$producto->p_tipo}}</span> <br>
    <span > <b> Precio: </b>{{$producto->p_precio}} Bs</span> <br>
    <span > <b> Disponible: </b> {{$producto->p_cantidad}} </span> <br>
    <span > <b> Descripcion: </b> {{$producto->p_descripcion}}</span> <br>

</div>

  @if(Auth::user()->hasRole('admin'))

    <a class="btn btn-primary btn-lg botoncito" href="/productos/{{$producto->p_cod}}/edit">Actualizar</a>
    {!! Form::open(['route'=>['productos.destroy',$producto->p_cod],'method'=>'DELETE' ]) !!}
    {!! Form::submit('Eliminar',['class'=>'btn btn-danger']) !!}
    {!! Form::close() !!}
  @endif
</div>
@stop

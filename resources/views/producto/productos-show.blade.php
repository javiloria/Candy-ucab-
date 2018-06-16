@extends('producto.productos')
@section('central')
<div class="contenedor-producto">
  <img style="height:250px; width: 250px;"src="{{asset('insertado/producto/'.$producto->p_imagen)}}" alt="">
  <div class="descripcion-producto">
    <h4 >{{$producto->p_nombre}}</h4>
    <span >cod: {{$producto->p_cod}}</span>
    <span >tipo: {{$producto->p_tipo}}</span>
    <span >{{$producto->p_precio}} Bs</span>
  </div>
  @if(Auth::user()->hasRole('admin'))

    <a class="btn btn-primary btn-lg botoncito" href="/productos/{{$producto->p_cod}}/edit">Actualizar</a>
    {!! Form::open(['route'=>['productos.destroy',$producto->p_cod],'method'=>'DELETE' ]) !!}
    {!! Form::submit('Eliminar',['class'=>'btn btn-danger']) !!}
    {!! Form::close() !!}
  @endif
</div>
@stop

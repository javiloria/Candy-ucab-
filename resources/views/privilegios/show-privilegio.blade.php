@extends('layouts.menuadmin')

@section('title', 'Privilegios')

@section('contenido')
  
<div class="text-center">
  @foreach($privilegios as $pri)
    <h1 >{{$pri->p_nombre}}</h1> <p></p>
    <span > <b> Cod: </b> {{$pri->p_cod}}</span> <br>
    
   


<div >
  @if(Auth::user()->hasRole('admin'))

    <a class="btn btn-primary btn-lg botoncito" href="/privilegios/{{$pri->p_cod}}/edit">Actualizar</a>
    {!! Form::open(['route'=>['privilegios.destroy',$pri->p_cod],'method'=>'DELETE' ]) !!}
    {!! Form::submit('Eliminar',['class'=>'btn btn-danger']) !!}
    {!! Form::close() !!}
  
</div>

@endif
@endforeach
 </div>
@stop

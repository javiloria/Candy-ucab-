@extends('layouts.menuadmin')

@section('title', 'Privilegios')

@section('contenido')

<div class="container">
    <div class="row">
      <div class="col-md-12 text-center">
        <h1>Privilegios</h1>
        <p><a href="/">Inicio</a> > Privilegios</p>
      </div>
    </div>
<div class="contenedor-productos">
@foreach ($privilegio as $pri)

<div class="card text-center" id="contenedorCarta">
    <!-- asignamos la ruta de la bas de datos a la impresion -->
  <div class="text-center">
    <div class="card-body">
    <h2>{{$pri->p_nombre}}</h2>
  
      <a class="btn btn-primary btn-lg" href="/privilegios/{{$pri->p_cod}}">Ver más...</a>
      <p> </p>
          
    </div>
</div>
</div>
@endforeach
</div>
<a class="btn btn-primary btn-lg botoncito" href="/privilegios/create">Crear Privilegio</a>
@stop


@extends('layouts.menuadmin')

@section('title', 'Roles')

@section('contenido')

<div class="container">
    <div class="row">
      <div class="col-md-12 text-center">
        <h1>Roles</h1>
        <p><a href="/">Inicio</a> > Roles</p>
      </div>
    </div>
<div class="contenedor-productos">
@foreach ($roles as $rol)

<div class="card text-center" id="contenedorCarta">
    <!-- asignamos la ruta de la bas de datos a la impresion -->
  <div class="text-center">
    <div class="card-body">
    <h2>{{$rol->name}}</h2>
    <h4>{{$rol->description}}</h4>
      <a class="btn btn-primary btn-lg" href="/roles/{{$rol->id}}">Ver más...</a>
      <p> </p>
          
    </div>
</div>
</div>
@endforeach
</div>
<a class="btn btn-primary btn-lg botoncito" href="/roles/create">Crear Rol</a>
@stop


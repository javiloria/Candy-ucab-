@extends('layouts.master')

@section('title', 'Cargar asistencia')

@section('contenido')

<form method="post" action="{{url('import-excel')}}" enctype="multipart/form-data">
      {{csrf_field()}}
      <input type="file" name="excel">
      <br><br>
      <input type="submit" value="Enviar" style="padding: 10px 20px;">
  </form>
</div>

  
  @include('layouts.seccion-suscripcion')

  @stop

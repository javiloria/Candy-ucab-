@extends('layouts.menuadmin')

@section('title', 'Reportes')

@section('contenido')

<table class="table table-striped">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Nombre Tienda</th>
      <th scope="col">Total</th>
   
    </tr>
  </thead>
  <tbody>
    <?php $numero=0 ?>
     @foreach($tiendas as $c)
                <tr>
                  <?php $numero=$numero+1  ?>
                    <td>{{$numero}}</td>
                    <td>{{$c->nombre}}</td>
                    <td>{{$c->total}} </td>
                    
                </tr>
    @endforeach
  </tbody>

</table>
@endsection
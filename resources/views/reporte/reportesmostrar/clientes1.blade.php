@extends('layouts.menuadmin')

@section('title', 'Reportes')

@section('contenido')

<table class="table table-striped">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Nombre/Razon Social</th>
      <th scope="col">Apellido/denominacion comercial</th>
      <th scope="col">ci/rif</th>
    </tr>
  </thead>
  <tbody>
    <?php $numero=0 ?>
     @foreach($clientes as $c)
                <tr>
                  <?php $numero=$numero+1  ?>
                    <td>{{$numero}}</td>
                    <td>{{$c->nombre}}</td>
                    <td>{{$c->apellido}} </td>
                      <td>{{$c->ci}} </td>
                </tr>
    @endforeach
  </tbody>

</table>
@endsection
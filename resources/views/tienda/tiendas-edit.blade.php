@extends('tienda.tiendas')

@section('central')

  <form action="/tiendas/{{$tienda->t_cod}}" method="post" enctype="multipart/form-data">
    {{-- se coloca paraindicarque vamos acualizar--}}
        @method('PUT')
    {{-- se coloca siempre por protecccion de hackers en laravel--}}
    @csrf
    <div class="form-group">
      <label >Nombre</label>
      <input type="text" class="form-control" name="t_nombre" value="{{$tienda->t_nombre}}" placeholder="Introduzca el nombre"  required>
    </div>
    <div class="form-group">
      <label>Tipo de tienda</label>
      <input type="text" class="form-control" name= "t_tipotamano" value="{{$tienda->t_tipotamano}}" placeholder="Tipo tienda" required>
    </div>

    <div class="form-group">
      <label>imagen</label>
      <input type="file" name= "t_imagen" value="{{$tienda->t_imagen}}"  >
    </div>

    <button type="submit" class="btn btn-primary">Guardar</button>
  </form>

@stop

@extends('tienda.tiendas')

@section('central')

  <form action="/tiendas" method="POST">
    @csrf
    <div class="form-group">
      <label >Nombre</label>
      <input type="text" class="form-control" name="t_nombre" placeholder="Introduzca el nombre"  required>
    </div>
    <div class="form-group">
      <label>Tipo de tienda</label>
      <input type="text" class="form-control" name= "t_tipotamano" placeholder="Tipo tienda" required>
    </div>

    <div class="form-group">
      <label>codigo</label>
      <input type="text" class="form-control" name= "t_cod" placeholder="cod" required>
    </div>

    <div class="form-group">
      <label>lugar</label>
      <input type="text" class="form-control" name= "fk_lugar" placeholder="lugar" required>
    </div>

    <button type="submit" class="btn btn-primary">Registrar</button>
  </form>

@stop

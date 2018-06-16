@extends('producto.productos')
@section('central')


    <form class="form-group" action="/productos/{{$producto->p_cod}}" method="POST" enctype="multipart/form-data">
      {{-- se coloca paraindicarque vamos acualizar--}}
          @method('PUT')
          {{-- se coloca siempre por protecccion de hackers en laravel--}}
          @csrf

          <div class="container">

              <div class="form-group">

                  <div class="form-group">
                      <label >nombre</label>
                      <input type="text" name="p_nombre"  class= "form-control" value="{{$producto->p_nombre}}" required>
                  </div>
                  <div class="form-group">
                      <label >tipo</label>
                      <input type="text" name="p_tipo"  class= "form-control" value="{{$producto->p_tipo}}" required>
                  </div>
                  <div class="form-group">
                      <label >precio</label>
                      <input type="text" name="p_precio"  class ="form-control" value="{{$producto->p_precio}}" required>
                  </div>

                  <div class="form-group">
                  <img class="estilo-tiendas" src="{{asset('insertado/producto/'.$producto->p_imagen)}}" alt="">
                    </div>

                    <div class="form-group">
                        <label>imagen</label>
                        <input type="file" name= "p_imagen" value="{{$producto->p_imagen}}" >
                    </div>
            <button type="submit" class="btn btn-primary">Guardar</button>
          </div>
      </form>




  @stop

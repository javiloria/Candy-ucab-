@extends('producto.productos')
@section('central')


    <form class="form-group" action="/productos" method="POST" enctype="multipart/form-data">
          {{-- se coloca siempre por protecccion de hackers en laravel--}}
          @csrf

          <div class="container">

              <div class="form-group">

                  <label >cod</label>
                  <input type="text" name="p_cod"  class ="form-control"  required>
                    </div>

                  <div class="form-group">
                      <label >nombre</label>
                      <input type="text" name="p_nombre"  class= "form-control" required>
                  </div>
                  <div class="form-group">
                      <label >tipo</label>
                      <input type="text" name="p_tipo"  class= "form-control" required>
                  </div>
                  <div class="form-group">
                      <label >precio</label>
                      <input type="text" name="p_precio"  class ="form-control" required>
                  </div>
                  <div class="form-group">
                      <label>imagen</label>
                      <input type="file" name= "p_imagen"  >
                  </div>

            <button type="submit" class="btn btn-primary">Registrar</button>
          </div>
      </form>




  @stop

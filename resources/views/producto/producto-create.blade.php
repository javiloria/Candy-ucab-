@extends('producto.productos')
@section('central')


    <form class="form-group" action="/productos" method="POST">
          {{-- se coloca siempre por protecccion de hackers en laravel--}}
          @csrf

          <div class="container">

              <div class="form-group">

                  <label for="">cod</label>
                  <input type="text" name="P_cod"  class ="form-control">
                    </div>
  <div class="form-group">
                  <label for="">nombre</label>
                  <input type="text" name="P_nombre"  class= "form-control">
                    </div>
  <div class="form-group">
                  <label for="">tipo</label>
                  <input type="text" name="P_tipo"  class= "form-control">
                    </div>
  <div class="form-group">
                  <label for="">precio</label>
                  <input type="text" name="P_precio"  class ="form-control">
              </div>

            <button type="submit" class="btn btn-primary">Registrar</button>
          </div>
      </form>




  @stop

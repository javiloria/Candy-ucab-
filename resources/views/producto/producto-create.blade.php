{{-- @extends('producto.productos')
@section('central')


    <form class="form-group" action="/productos" method="POST" enctype="multipart/form-data">
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

--}}



@extends('layouts.master')

@section('title', 'Crear producto')

@section('contenido')
 <form class="form-group" action="/productos" method="POST" enctype="multipart/form-data">
          @csrf

  <div class="container">
    <div class="row">
      <div class="col-md-12 text-center">
        <h1 class="titulos-principales">Crear productos</h1>
      </div>
    </div>

    <div class="row">
      <div class="col-md-offset-4 col-md-4">

        <div class="modal-body">

              <div class="form-group">
                <input type="text" name="p_cod"  class ="form-control"  placeholder="Código del producto" required>
              </div>
               <div class="form-group">
                   <input type="text" name="p_nombre" required class="form-control input-lg" placeholder="Nombre del producto"/>
               </div>

               <div class="form-group">
                      <input type="text" name="p_tipo"  class= "form-control" required placeholder="Tipo">
                </div>

               <div class="form-group">
                   <input type="text"  name="p_cantidad" class="form-control input-lg" placeholder="Cantidad"/>
               </div>
               <div class="form-group">
                   <input type="text" name="p_precio"  class="form-control input-lg" placeholder="Precio"/>
               </div>

               <div class="form-group">
                      <input type="file" name= "p_imagen"  placeholder="Imagen del producto">
                  </div>

               <div class="form-group">
                   <textarea class="form-control input-lg" name= "p_descripcion"  placeholder="Descripción del producto"></textarea> 
               </div>

               <div class="form-group">
                   <input type="submit"  class="btn btn-block btn-lg btn-primary" value="Crear producto"/>
               </div>
           </div>

      </div>
    </div>
  </div>
   <button type="submit" class="btn btn-primary">Registrar</button>
 </form>
        

        


@stop
{{--@extends('producto.productos')
@section('central')


    <form class="form-group" action="/productos/{{$producto->p_cod}}" method="POST" enctype="multipart/form-data">
     
          @method('PUT')
          
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



--}}


@extends('layouts.master')

@section('title', 'Modificar producto')

@section('contenido')

  <div class="container">
    <div class="row">
      <div class="col-md-12 text-center">
        <h1 class="titulos-principales">Modificar producto</h1>
      </div>
    </div>

    <div class="row">
      <div class="col-md-offset-4 col-md-4">

        <p>Mostrando N productos</p>

        <select style="width: 90%;text-align: center; margin: 0 auto" class="form-control" id="sel">
        <option>Seleccione el producto</option>
        <option>1</option>
        <option>2</option>
        <option>3</option>
        <option>4</option>
        </select>
            
          

        <div class="modal-body">
               <div class="form-group">
                   <input type="text" class="form-control input-lg" placeholder="Nombre del producto" name="p_nombre" value="{{$producto->p_nombre}}" required/>
               </div>
               <div class="form-group">
                 <input type="text" name="p_tipo"  class= "form-control" value="{{$producto->p_tipo}}" required placeholder="Tipo">
               </div>
               <div class="form-group">
                   <input type="text" class="form-control input-lg" placeholder="Cantidad"/>
               </div>
               <div class="form-group">
                   <input name="p_precio"  value="{{$producto->p_precio}}" type="text" class="form-control input-lg" placeholder="Precio" required/>
               </div>

               <div class="form-group">
                   <textarea class="form-control input-lg" placeholder="Descripción del producto"></textarea> 
               </div>

               <div class="form-group">
                  <img class="estilo-tiendas" src="{{asset('insertado/producto/'.$producto->p_imagen)}}" alt="">
                  </div>

                    <div class="form-group">
                        <label>imagen</label>
                        <input type="file" name= "p_imagen" value="{{$producto->p_imagen}}" >
                    </div>

               <div class="form-group">
                   <input type="submit" class="btn btn-block btn-lg btn-primary" value="Modificar producto"/>
               </div>
           </div>

      </div>
    </div>
  </div>
        

        


@stop
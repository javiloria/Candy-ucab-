
@extends('tienda.tiendas')

@section('central')

    @php
      $estado= DB::table('lugar')->where('l_tipo', 'Estado')->get();
    @endphp

  <form name="datos" action="/tiendas" method="post" enctype="multipart/form-data">
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
      <label>imagen</label>
      <input type="file" name= "t_imagen"  >
    </div>


    <select  id="estadoss" >
   		<?php
      foreach ($estado as $estadito ) {

   			echo "<option value=".$estadito->l_cod.">".$estadito->l_nombre."</option>";
   			}
           ?>
          </select>

          <select id="municipioss" >
         		<?php
              $municipio= DB::table('lugar')->where('l_tipo','Municipio')->orderBy('l_nombre','asc')->get();
            foreach ($municipio as $municipios ) {

         			echo "<option value=".$municipios->l_cod.">".$municipios->l_nombre."</option>";
         			}
                 ?>
                </select>

                <select name="fk_lugar" id="selecta" >
                  <?php
                    $parroquias= DB::table('lugar')->where('l_tipo','Parroquia')->orderBy('l_nombre','asc')->get();
                  foreach ($parroquias as $parroquia ) {

                    echo "<option value=".$parroquia->l_cod.">".$parroquia->l_nombre."</option>";
                    }
                       ?>
                      </select>

    <button type="submit" class="btn btn-primary">crear</button>
  </form>

@stop

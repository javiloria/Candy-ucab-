@extends('layouts.menuadmin')

@section('title', 'Repoorte -Mes mas rentable')

@section('contenido')
<form class="form-group" action="{{ action('ReportesController@mesmasrentablelugar') }}" method="POST" >
          @csrf

  <div class="container">
    <div class="row">
      <div class="col-md-12 text-center">
        <h1 class="titulos-principales">Mes Mas Rentable por Lugar</h1>
      </div>
    </div>

    <div class="row">
      <div class="col-md-offset-4 col-md-4">

        <div class="modal-body">


               

          <label for="">estado</label>
    <select  id="estadoss" >
   		<?php
      foreach ($estado as $estadito ) {

   			echo "<option value=".$estadito->l_cod.">".$estadito->l_nombre."</option>";
   			}
           ?>
          </select>
          <label for="">municipio</label>
          <select id="municipioss" >
         		<?php
              $municipio= DB::table('lugar')->where('l_tipo','Municipio')->orderBy('l_nombre','asc')->get();
            foreach ($municipio as $municipios ) {

         			echo "<option value=".$municipios->l_cod.">".$municipios->l_nombre."</option>";
         			}
                 ?>
                </select>
                <label for="">parroquia</label>
                <select name="fk_lugar" id="selecta" >
                  <?php
                    $parroquias= DB::table('lugar')->where('l_tipo','Parroquia')->orderBy('l_nombre','asc')->get();
                  foreach ($parroquias as $parroquia ) {

                    echo "<option value=".$parroquia->l_cod.">".$parroquia->l_nombre."</option>";
                    }
                       ?>
                      </select>

               <div class="form-group">
                   <input type="submit"  class="btn btn-block btn-lg btn-primary" value="Generar Reporte"/>
               </div>
           </div>

      </div>
    </div>
  </div>
 </form>





@stop

@extends('layouts.menuadmin')

@section('title', 'Puntos Canjeados')

@section('contenido')
 <form class="form-group" action="{{ action('ReportesController@puntoscanjeados') }}" method="POST" >
          @csrf

  <div class="container">
    <div class="row">
      <div class="col-md-12 text-center">
        <h1 class="titulos-principales">Puntos Canjeados </h1>
      </div>
    </div>

    <div class="row">
      <div class="col-md-offset-4 col-md-4">

        <div class="modal-body">


               

          <label for="">tienda </label>
        <div class="form-group">
            <select name="tienda" >

              @foreach($tiendas as $tienda)
                 <option  value="{{$tienda->t_cod}}">{{$tienda->t_nombre}} </option>
                 
                @endforeach

            </select>
        </div>
        
          <label for="">Estado: <br/> </label>
    <select   >
      <?php
      foreach ($estado as $estadito ) {

        echo "<option value=".$estadito->l_cod.">".$estadito->l_nombre."</option>";
        }
           ?>
          </select>
          <label for="">Municipio:</label>
          <select >
            <?php
              $municipio= DB::table('lugar')->where('l_tipo','Municipio')->orderBy('l_nombre','asc')->get();
            foreach ($municipio as $municipios ) {

              echo "<option value=".$municipios->l_cod.">".$municipios->l_nombre."</option>";
              }
                 ?>
                </select>
                <label for="">Parroquia:</label>
                <select name="fk_lugar"  >
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

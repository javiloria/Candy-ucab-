@extends('layouts.menuadmin')

@section('title', 'Reporte')

@section('contenido')
 <form class="form-group" action="{{ action('ReportesController@clientemejores') }}" method="POST" >
          @csrf

  <div class="container">
    <div class="row">
      <div class="col-md-12 text-center">
        <h1 class="titulos-principales">5 mejores clientes por compras</h1>
      </div>
    </div>

    <div class="row">
      <div class="col-md-offset-4 col-md-4">

        <div class="modal-body">


              
        
          <label for="">fecha inicio </label>
          <div class="form-group">
          <!-- Campo de entrada de fecha -->
           <input type="date" name="fecha_inicio"
                                  max="2018-07-03" >
          </div>


          <label for="">fecha fin </label>
          <div class="form-group">
          <!-- Campo de entrada de fecha -->
           <input type="date" name="fecha_fin" 
                                  max="2018-07-03" >
          </div>



               <div class="form-group">
                   <input type="submit"  class="btn btn-block btn-lg btn-primary" value="Generar Reporte"/>
               </div>
           </div>

      </div>
    </div>
  </div>
 </form>





@stop

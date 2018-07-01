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
        
          <label for="">lugar </label>
          <div class="form-group">
          <!-- Campo de entrada de fecha -->
           <input type="text" name="lugar">
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

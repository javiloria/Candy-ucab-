@extends('layouts.menuadmin')

@section('title', 'Iniciar venta')

@section('contenido')
 <form class="form-group" action="{{ action('VentasController@iniciarventa') }}" method="POST" >
          @csrf

  <div class="container">
    <div class="row">
      <div class="col-md-12 text-center">
        <h1 class="titulos-principales">Iniciar Venta </h1>
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

               <div class="form-group">
                   <input type="submit"  class="btn btn-block btn-lg btn-primary" value="Ingresar"/>
               </div>
           </div>

      </div>
    </div>
  </div>
 </form>





@stop

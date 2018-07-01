@extends('layouts.menuadmin')

@section('title', 'Crear Rol')

@section('contenido')
 <form class="form-group" action="/privilegios" method="POST" >
          @csrf

  <div class="container">
    <div class="row">
      <div class="col-md-12 text-center">
        <h1 class="titulos-principales">Crear Privilegio </h1>
      </div>
    </div>

    <div class="row">
      <div class="col-md-offset-4 col-md-4">

        <div class="modal-body">


          <label for="">nombre </label>
          <div class="form-group">
          <!-- Campo de entrada de fecha -->
           <input type="text" name="nombre">
          </div>

              </div>

               <div class="form-group">
                   <input type="submit"  class="btn btn-block btn-lg btn-primary" value="Crear Privilegio"/>
               </div>
           </div>

      </div>
    </div>
  </div>
 </form>





@stop
@extends('layouts.menuadmin')

@section('title', 'Editar Rol')

@section('contenido')
 <form class="form-group" action="/roles/{{$rol->id}}" method="POST" >

          @method('PUT') 
          @csrf

  <div class="container">
    <div class="row">
      <div class="col-md-12 text-center">
        <h1 class="titulos-principales">Actualizar Rol </h1>
      </div>
    </div>

    <div class="row">
      <div class="col-md-offset-4 col-md-4">

        <div class="modal-body">


          <label for="">nombre </label>
          <div class="form-group">
          <!-- Campo de entrada de fecha -->
           <input type="text" name="r_nombre" value="{{$rol->name}}" required>
          </div>

          <label for=""> descripcion</label>
          <div class="form-group">
          <!-- Campo de entrada de fecha -->
           <input type="text" name="r_descripcion" value="{{$rol->description}}" required>
          </div>


          <label for="">privilegio </label>
          <div id="dynamicDiv" class="form-group">
        <div class="form-group">
            <select name="privilegio">


              @foreach($privilegios as $privilegio)
                 <option  value="{{$privilegio->p_cod}}">{{$privilegio->p_nombre}} </option>
                 
                @endforeach

            </select>
        </div>
              </div>

              <a class="btn btn-primary" href="javascript:void(0)" id="addInput">
            <span class="glyphicon glyphicon-plus" aria-hidden="true"></span>
            Adicionar más...
          </a>
          <p> </p>
          
               <div class="form-group">
                   <input type="submit"  class="btn btn-block btn-lg btn-primary" value="Modificar"/>
               </div>
           </div>

      </div>
    </div>
  </div>
 </form>





@stop
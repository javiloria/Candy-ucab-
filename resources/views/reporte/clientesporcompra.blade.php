@extends('layouts.menuadmin')

@section('title', 'Ingresos vs Egresos')

@section('contenido')

  <div class="container">
    <div class="row">
      <div class="col-md-12 text-center">
        <h1 class="titulos-principales">Asistencia</h1>
      </div>
    </div>
       <div class="container text-center" id="contenedorElias">
           <div class="col-sm">

            @foreach($clientesporcompra as $cliente)
                  <div class="card text-center" style="margin-left: 50px " id="contenedorCarta">
                          <div class="card-body">
                            <h2 class="card-title">{{$cliente->c_n_pnombre}}</h2>
                          </div>
                  </div>
             @endforeach
          </div>
       </div>
  </div>
 </form>


@stop

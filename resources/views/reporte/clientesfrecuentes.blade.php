@extends('layouts.menuadmin')

@section('title', 'Clientes Frecuentes')

@section('contenido')

  <div class="container">
    <div class="row">
      <div class="col-md-12 text-center">
        <h1 class="titulos-principales">Asistencia</h1>
      </div>
    </div>
       <div class="container text-center" id="contenedorElias">
           <div class="col-sm">

            @foreach($clientesfrecuentes as $clientefrecuente)
                  <div class="card text-center" style="margin-left: 50px " id="contenedorCarta">
                          <div class="card-body">
                            <h2 class="card-title">{{$clientefrecuente->c_n_pnombre}} {{$clientefrecuente->c_n_papellido}}</h2>
                          </div>
             @endforeach
  </div>
</div>
</div>
  </div>
 </form>

@stop
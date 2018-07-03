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
          <div class="row">
            @foreach($datosempleados as $datoempleado)
              
              <?php

                $asistencias = DB::table('asistencia')->where('fk_empleado', $datoempleado->e_ci)->get();
                foreach ($asistencias as $asistencia);
              ?>

              <div class="col-sm">
                  <div class="card text-center" id="contenedorCarta">
                          <div class="card-body">
                            <h2 class="card-title"> Horario {{$asistencia->fk_horario}} </h2>
                            
                            <label>----------------------</label>

                            <h2 class="card-title">{{$datoempleado->e_nombre}} {{$datoempleado->e_apellido}}</h2>

                          <h5>
                           <b>Hora de Entrada: </b> {{$datoempleado->h_fechallegada}} <br>
                           <b>Hora de Salida: </b> {{$datoempleado->h_fechasalida}}<br>
                           <b>CI: </b>  {{$datoempleado->e_ci}} <br>
                           <b>Departamento: </b> {{$datoempleado->fk_departamento}} <br>
                          </h5>


                          </div>
            </div>
        </div>
      @endforeach
  </div>
</div>
  </div>
 </form>

@stop

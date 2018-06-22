<?php

namespace CandyUcab\Http\Controllers;
use Illuminate\Http\Request;
use CandyUcab\Asistencia;
class ExcelController extends Controller
{


  public function importUsers(Request $request)
{

  //cargar el excell recibido
    \Excel::load($request->excel, function($reader) {

        $excel = $reader->get();

        // iteracción
        $reader->each(function($row) {
          //guardando en cada campo lo que le petenece 
            $asistencia = new Asistencia;
          $asistencia->a_ci =$row->cedula;

          $asistencia->a_fechallegada =$row->fecha_hora_entrada;
          $asistencia->a_fechasalida =$row->fecha_hora_salida;
          $asistencia->save();

        });

    });

    return "Terminado";
}
}

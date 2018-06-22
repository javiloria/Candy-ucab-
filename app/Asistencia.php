<?php

namespace CandyUcab;

use Illuminate\Database\Eloquent\Model;

class Asistencia extends Model
{
  //definiendo que tabla se refierfe este modelo
protected $table = 'asistencia';
//definiendo la clave primaria
protected $primaryKey = 'a_ci';
//defininedo que no guarde fecha de creacion y actualizacion en la BD
public $timestamps = false;
}

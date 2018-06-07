<?php

namespace CandyUcab;

use Illuminate\Database\Eloquent\Model;

class Tienda extends Model
{
  //definiendo que tabla se refiere este modelo
protected $table = 'tienda';
//definiendo la clave primaria
protected $primaryKey = 't_cod';
//defininedo que no guarde fecha de creacion y actualizacion en la BD
public $timestamps = false;
}

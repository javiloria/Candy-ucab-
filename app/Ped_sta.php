<?php

namespace CandyUcab;

use Illuminate\Database\Eloquent\Model;

class Ped_sta extends Model
{
              //definiendo que tabla se refierfe este modelo
protected $table = 'ped_sta';
//definiendo la clave primaria
protected $primaryKey = 'ps_cod';
//defininedo que no guarde fecha de creacion y actualizacion en la BD
public $timestamps = false;
}

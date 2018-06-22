<?php

namespace CandyUcab;

use Illuminate\Database\Eloquent\Model;

class Credito extends Model
{
       //definiendo que tabla se refierfe este modelo
protected $table = 'credito';
//definiendo la clave primaria
protected $primaryKey = 'mp_cod';
//defininedo que no guarde fecha de creacion y actualizacion en la BD
public $timestamps = false;
}

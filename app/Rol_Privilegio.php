<?php

namespace CandyUcab;

use Illuminate\Database\Eloquent\Model;

class Rol_Privilegio extends Model
{
    protected $table = 'rol_privilegio';
  //definiendo la clave primaria
  protected $primaryKey = 'r_p_id';
  //definiendo que no se guarde la fecha de creacion y actualizacion
  public $timestamps = false;
}

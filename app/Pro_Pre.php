<?php

namespace CandyUcab;

use Illuminate\Database\Eloquent\Model;

class Pro_Pre extends Model
{
  protected $table = 'pro_pre';
  //definiendo la clave primaria
  protected $primaryKey = 'pp_id';
  //definiendo que no se guarde la fecha de creacion y actualizacion
  public $timestamps = false;
}

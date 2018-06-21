<?php

namespace CandyUcab;

use Illuminate\Database\Eloquent\Model;

class Presupuesto extends Model
{
  //definiend los atributos actualizables
  protected $fillable= ['p_validez','p_monto'];
  //definiendo que tabla se refierfe este modelo
protected $table = 'presupuesto';
//definiendo la clave primaria
protected $primaryKey = 'p_cod';
//definiendo que no se guarde la fecha de creacion y actualizacion
public $timestamps = false;
}

<?php

namespace CandyUcab;

use Illuminate\Database\Eloquent\Model;

class Carnet extends Model
{
    //definiendo que tabla se refierfe este modelo
	protected $table = 'carnet';
	//definiendo el nombre del codigo de este modelo
    protected $primaryKey = "c_numero";
    //definiendo que no se guarde la fecha de creacion y actualizacion
    public $timestamps = false;
}

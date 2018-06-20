<?php

namespace CandyUcab;

use Illuminate\Database\Eloquent\Model;

class Jur_Con extends Model
{
    //definiendo que tabla se refierfe este modelo
	protected $table = 'jur_con';
	//definiendo el nombre del codigo de este modelo
    protected $primaryKey = "jc_cod";
    //definiendo que no se guarde la fecha de creacion y actualizacion
    public $timestamps = false;
}

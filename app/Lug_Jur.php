<?php

namespace CandyUcab;

use Illuminate\Database\Eloquent\Model;

class Lug_Jur extends Model
{
    //definiendo que tabla se refierfe este modelo
	protected $table = 'lug_jur';
	//definiendo el nombre del codigo de este modelo
    protected $primaryKey = "lj_cod";
    //definiendo que no se guarde la fecha de creacion y actualizacion
    public $timestamps = false;
}

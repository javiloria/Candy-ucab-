<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Producto extends Model
{
  //definiendo que tabla se refierfe este modelo
protected $table = 'producto';
//definiendo la clave primaria
protected $primaryKey = "p_cod";
}

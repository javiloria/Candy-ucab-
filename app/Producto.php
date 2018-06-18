<?php

namespace CandyUcab;

use Illuminate\Database\Eloquent\Model;

class Producto extends Model
{
  //definiend los atributos actualizables
  protected $fillable= ['p_nombre','p_tipo','p_precio','p_imagen'];
  //definiendo que tabla se refierfe este modelo
protected $table = 'producto';
//definiendo la clave primaria
protected $primaryKey = 'p_cod';
}

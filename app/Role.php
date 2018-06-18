<?php

namespace CandyUcab;

use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
  public function users()
{
  return $this
      ->belongsToMany('CandyUcab\Usuario','role_usuario', 'role_id','u_username')
      ->withTimestamps();
}
}

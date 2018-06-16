<?php

namespace CandyUcab;

use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
  public function users()
{
  return $this
      ->belongsToMany('CandyUcab\User')
      ->withTimestamps();
}
}

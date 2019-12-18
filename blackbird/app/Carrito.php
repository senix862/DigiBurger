<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Carrito extends Model
{
  public $table = "carrito";

  public $timestamps = false;

  public $guarded = [];
}

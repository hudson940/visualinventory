<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class OpProducto extends Model
{
   protected $table='op_productos';
   protected $fillable=['id_producto','cantidad_op_producto','id_op'];
   public $timestamps=false;
}

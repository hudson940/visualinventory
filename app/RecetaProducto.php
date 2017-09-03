<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class RecetaProducto extends Model
{
   
        protected $table='receta_productos';
        protected $fillable = [
            'id_receta', 'id_producto','cantidad_producto'
        ];
    
        public $timestamps= false;
  
}

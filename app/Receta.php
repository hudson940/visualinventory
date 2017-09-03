<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Receta extends Model
{
    protected $table='recetas';
    protected $fillable = [
        'id_receta', 'id_producto','cantidad_produccion','cantidad_producto'
    ];

    public $timestamps= false;

    

}


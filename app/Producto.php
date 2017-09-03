<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Producto extends Model
{    protected $table='productos';
    protected $fillable =[
        'id_producto','tit_producto','id_proveedor','id_unidad_medida',
        'costo_producto','id_bodega','id_impuesto'
    ];
    public $timestamps=false;
}

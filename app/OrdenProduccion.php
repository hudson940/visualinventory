<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class OrdenProduccion extends Model
{
    protected $table='orden_produccions';
    protected $fillable =['id_usuario','fecha_op','id_receta','id_producto'];
    public $timestamps=false;
}

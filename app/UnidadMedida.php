<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UnidadMedida extends Model
{
    protected $table='unidad_medidas';
    protected $fillable = [
        'id_unidad_medida', 'tit_unidad_medida','relacion'
    ];

    public $timestamps= false;
    
}

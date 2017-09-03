<?php

namespace App;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Model;
use App\Http\Controllers\Controller;
class Proveedor extends Model
{protected $table='proveedores';
    protected $fillable = [
        'id_proveedor', 'nit_proveedor','razon_social','direccion_proveedor', 
        'telefono_proveedor'
    ];

    public $timestamps= false;
}

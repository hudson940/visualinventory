<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;

class paginasController extends Controller
{
    
    public function oc()
    {
        return view('orden-compra');
    }
    public function recetas()
    {
        return view('recetas');
    }
    public function op()
    {
        return view('orden-produccion');
    }
    public function productos()
    {
        return view('productos');
    }
    public function unidades()
    {
        return view('unidades');
    }
    public function saldos()
    {
        return view('saldos');
    }
    public function login()
    {
        return view('login');
    }
}
<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\OpProducto;
use App\OrdenProduccion;

class OpController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $opProductos= OpProducto::all();
        $ordenProduccions= OrdenProduccion::all();
        return view('ordenes-produccion')->with('opProductos',$opProductos)->with('ordenProduccions',$ordenProduccions);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {   $ordenProduccion= new OrdenProducccion($request->all());
        $ordenProduccion-> save();

        return  redirect()->route('/ordenes-produccion');
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $opProducto= new OpProducto($request->all());
        $opProducto->save();
        flash("La orden de produccion ".$ordenProduccion->id_op." se ha creado satisfactoriamente");
        return  redirect()->route('/ordenes-produccion');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}

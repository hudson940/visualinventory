<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Proveedor;
class ProveedorController extends Controller
{
    public function index()
    {   $Proveedores = Proveedor::orderBy('razon_social','ASC')->paginate(15);
        
        return view('proveedores')->with('Proveedores',$Proveedores);
    }
   
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
     public function create()
     {
        
     }
 
     /**
      * Store a newly created resource in storage.
      *
      * @param  \Illuminate\Http\Request  $request
      * @return \Illuminate\Http\Response
      */
     public function store(Request $request)
     {  
         
        $Proveedor = new Proveedor($request->all());
        $Proveedor-> save();
        
        flash("El proveedor ".$Proveedor->razon_social." se ha creado de forma exitosa")->success();
        return redirect()->route('proveedores.index');
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

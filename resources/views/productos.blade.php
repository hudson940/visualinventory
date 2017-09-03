@extends('master')
@section('titulo','Productos')
@section('dashboard','Inventario')

@section('contenido')

                      
                  <div class="card">
                    <div class="card-close">
                      <div class="dropdown">
                        <button type="button" id="closeCard" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="dropdown-toggle"><i class="fa fa-ellipsis-v"></i></button>
                        <div aria-labelledby="closeCard" class="dropdown-menu has-shadow" style="display: none;"><a href="#" class="dropdown-item remove"> <i class="fa fa-times"></i>Close</a><a href="#" class="dropdown-item edit"> <i class="fa fa-gear"></i>Edit</a></div>
                      </div>
                    </div>
                    <div class="card-header d-flex align-items-center">
                      <h3 class="h4">Crear Producto</h3>
                    </div>
                    <div class="card-body">
                     {!! Form::open(['route'=>'productos.store','method'=>'POST','class'=>'form-horizontal']) !!}
                      
                        <div class="form-group row">
                          <label for="InputProducto" class="col-sm-3 form-control-label">Producto</label>
                          <input name="tit_producto" id="InputProducto" type="text" selected=null placeholder="Titulo Prducto" class="mx-sm-3 form-control">
                        </div>
                          <div class="form-group row">
                          <label for="Inputproveedor" class="col-sm-3 form-control-label">Producto</label>
                       
                         
                          <select name="id_proveedor" class="mx-sm-3 form-control" >
                          <option value="id_proveedor">Seleccione...</option>
                        @foreach ($Proveedores as $proveedor) 
                          <option value={!!$proveedor->id_proveedor!!}>{!!$proveedor->razon_social!!}</option>
                         @endforeach </select>
                          </div>
                        <div class="form-group row">
                          <label for="InputBodega" class="col-sm-3 form-control-label">Bodega</label>
                          <input name="id_bodega" id="InputBodega" type="text" placeholder="Bodega" class="mx-sm-3 form-control form-control">
                        
                        </div>
                        <div class="form-group row">
                         
                           <label  class="col-sm-3 form-control-label">Unidad Medida</label>
                          <input name="id_unidad_medida" id="InputMedida" type="text" placeholder="Unidad Medida" class="mx-sm-3 form-control form-control">
                        </div>
                        
                        <div class="form-group row">
                        <div class="input-group"><span class="input-group-addon">Costo $</span>
                                <input name="costo_producto" type="text" class="form-control">
                              </div></div>
                        <div class="form-group row">
                        <div class="input-group"><span class=" input-group-addon">Impuesto %</span>
                                <input name="id_impuesto" type="text" class="form-control">
                              </div>   </div>   
                        
                        <div class="form-group row">
                          <input type="submit" value="Crear Producto" class="mx-sm-3 btn btn-primary">
                        </div>
                      {!! Form::close() !!}
                      
                      @include('flash::message')
                    </div>
                  </div>
               
<div class="card">
                    <div class="card-close">
                      <div class="dropdown">
                        <button type="button" id="closeCard" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="dropdown-toggle"><i class="fa fa-ellipsis-v"></i></button>
                        <div aria-labelledby="closeCard" class="dropdown-menu has-shadow"><a href="#" class="dropdown-item remove"> <i class="fa fa-times"></i>Close</a><a href="#" class="dropdown-item edit"> <i class="fa fa-gear"></i>Edit</a></div>
                      </div>
                    </div>
                    <div class="card-header d-flex align-items-center">
                      <h3 class="h4">Listado de Productos</h3>
                    </div>
                    <div class="card-body">
                      <table class="table table-striped">
                        <thead>
                          <tr>
                            
                            <th>Id</th>
                            <th>Producto</th>
                            <th>Proeedor</th>
                            <th>Unidad Medida</th>
                            <th>Costo</th>
                            <th>Bodega</th>
                            <th>Impuesto</th>
                            <th>Accion</th>
                            

                          </tr>
                        </thead>
                        <tbody>
                        @foreach ($Productos as $Producto)
                        
                        
                          <tr>
                            <th scope="row">{{$Producto->id_producto}}</th>
                            <th>{{$Producto->tit_producto}}</th>
                            <td>{{$Producto->id_proveedor}}</td>
                            <td>{{$Producto->id_unidad_medida}}</td>
                            <td>{{$Producto->costo_producto}}</td>
                            <td>{{$Producto->id_bodega}}</td>
                            <td>{{$Producto->id_impuesto}}</td>
                            <td>  <button class="btn btn-sm btn-success"><i class="fa fa-check"></i> </button>
								  <button class="btn btn-sm btn-warning"><i class="fa fa-pencil"></i> </button>
								  <button class="btn btn-sm btn-danger"><i class="fa fa-times"></i> </button>
													  
                            </td>
                          </tr>
                          
                        @endforeach
                         
                            
                           
                          
                         
                        </tbody>
                      </table>
                    </div>
                  </div>
@endsection
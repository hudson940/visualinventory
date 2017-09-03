@extends('master')
@section('titulo','Proveedores')
@section('dashboard','Compras')
@section('contenido')
<div class="card">
                    <div class="card-close">
                      <div class="dropdown">
                        <button type="button" id="closeCard" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="dropdown-toggle"><i class="fa fa-ellipsis-v"></i></button>
                        <div aria-labelledby="closeCard" class="dropdown-menu has-shadow" style="display: none;"><a href="#" class="dropdown-item remove"> <i class="fa fa-times"></i>Close</a><a href="#" class="dropdown-item edit"> <i class="fa fa-gear"></i>Edit</a></div>
                      </div>
                    </div>
                    <div class="card-header d-flex align-items-center">
                      <h3 class="h4">Crear Orden Compra</h3>
                    </div>
        <div class="card-body">
                     
                      <form class="form-horizontal">
                      <div class="form-group row">
                          <label class="col-sm-3 form-control-label">Fecha</label>
                          <div class="col-sm-9">
                            <input id="inputfecha" type="date" class="form-control form-control-success">
                          </div>
                        </div>
                        <div class="form-group row">
                          <label class="col-sm-3 form-control-label">Proveedor</label>
                          <div class="col-sm-9">
                            <input id="inputProveedor" type="text" placeholder="Comercializadora abc" class="form-control form-control-success"><small class="form-text">Nombre o razon social del Proveedor</small>
                          </div>
                        </div>
                        <div class="form-group row">
                          <label class="col-sm-3 form-control-label">Factura</label>
                          <div class="col-sm-9">
                            <input id="inputfactura" type="text" class="form-control form-control-warning">
                          </div>
                        </div>
                        <div class="form-group row">
                          <label class="col-sm-3 form-control-label">Transportador</label>
                          <div class="col-sm-9">
                            <input id="inputTrans" type="text" placeholder="Servientrega" class="form-control form-control-warning">
                          </div>
                        </div>
                         <div class="form-group row">
                          <label class="col-sm-3 form-control-label">Guia</label>
                          <div class="col-sm-9">
                            <input id="inputguia" type="text" placeholder="0386615528" class="form-control form-control-warning">
                          </div>
                        </div>
                        <div class="form-group row">       
                          <div class="col-sm-9 offset-sm-3">
                            <input type="submit" value="Crear Orden" class="btn btn-primary">
                          </div>
                        </div>
                      </form>
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
                      <h3 class="h4">Listado de Compras</h3>
                    </div>
                    <div class="card-body">
                      <table class="table table-striped">
                        <thead>
                          <tr>
                            <th>Id</th>
                            <th>Fecha</th>
                            <th>Factura</th>
                            <th>Proveedor</th>
                            <th>Accion</th>
                          </tr>
                        </thead>
                        <tbody>
                          <tr>
                            <th scope="row"><a href="#">1</th>
                            <th>11/07/2017</th>
                            <td>1589</td>
                            <td>Carnes Danny</td>
                            <td>  <button class="btn btn-sm btn-success"><i class="fa fa-check"></i> </button>
								  <button class="btn btn-sm btn-warning"><i class="fa fa-pencil"></i> </button>
								  <button class="btn btn-sm btn-danger"><i class="fa fa-times"></i> </button>
													  
                            </td>
                           
                          </tr>
                         
                        </tbody>
                      </table>
                    </div>
                  </div>
                
@endsection
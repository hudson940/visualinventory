@extends('master')
@section('titulo','Proveedores')
@section('dashboard','Compras')
@section('contenido')

<div class="card-body">
                      <p id="crearProveedor">Crear Proveedor</p>
                      
                      {!! Form::open(['route'=>'proveedores.store','method'=>'POST','class'=>'form-horizontal']) !!}
                      
                      
                      <div class="form-group row">
                          <label class="col-sm-3 form-control-label">Identificacion</label>
                          <div class="col-sm-9">
                            <input name="nit_proveedor" type="text" placeholder="Ej. 900370555-1" class="form-control form-control-success"><small class="form-text">Cedula  o NIT del Proveedor</small>
                          </div>
                        </div>
                        <div class="form-group row">
                          <label class="col-sm-3 form-control-label">Proveedor</label>
                          <div class="col-sm-9">
                            <input name="razon_social" type="text" placeholder="Comercializadora abc" class="form-control form-control-success"><small class="form-text">Nombre o razon social del Proveedor</small>
                          </div>
                        </div>
                        <div class="form-group row">
                          <label class="col-sm-3 form-control-label">Direccion</label>
                          <div class="col-sm-9">
                            <input name="direccion_proveedor" type="text" placeholder="Cll 11 # 3b-05" class="form-control form-control-warning">
                          </div>
                        </div>
                         <div class="form-group row">
                          <label class="col-sm-3 form-control-label">Telefono</label>
                          <div class="col-sm-9">
                            <input name="telefono_proveedor" type="text" placeholder="0386615528" class="form-control form-control-warning">
                          </div>
                        </div>
                        <div class="form-group row">       
                          <div class="col-sm-9 offset-sm-3">
                            <input type="submit" value="Crear Proveedor" class="btn btn-primary">
                          </div>
                        </div>
                      
                      {!! Form::close() !!}
                      
                      @include('flash::message')
                    </div>
<div class="card">
                    <div class="card-close">
                      <div class="dropdown">
                        <button type="button" id="closeCard" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="dropdown-toggle"><i class="fa fa-ellipsis-v"></i></button>
                        <div aria-labelledby="closeCard" class="dropdown-menu has-shadow"><a href="#" class="dropdown-item remove"> <i class="fa fa-times"></i>Close</a><a href="#" class="dropdown-item edit"> <i class="fa fa-gear"></i>Edit</a></div>
                      </div>
                    </div>
                    <div class="card-header d-flex align-items-center">
                      <h3 class="h4">Listado de Proveedores</h3>
                    </div>
                    <div class="card-body">
                      <table class="table table-striped">
                        <thead>
                          <tr>
                            <th>#</th>
                            <th>Identificacion</th>
                            <th>Proveedor</th>
                            <th>Direccion</th>
                            <th>Telefono</th>
                          </tr>
                        </thead>
                        <tbody>
                        
                        @foreach ($Proveedores as $proveedor)
                        
                        
                          <tr>
                            <th scope="row">{{$proveedor->id_proveedor}}</th>
                            <th>{{$proveedor->nit_proveedor}}</th>
                            <td>{{$proveedor->razon_social}}</td>
                            <td>{{$proveedor->direccion_proveedor}}</td>
                            <td>{{$proveedor->telefono_proveedor}}</td>
                          </tr>
                          
                        @endforeach
                        </tbody>
                      </table>
                                            {!!$Proveedores->links()!!}

                    </div>
                  </div>
@endsection
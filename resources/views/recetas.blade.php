@extends('master')
@section('titulo','Recetas')
@section('dashboard','Produccion')

@section('contenido')

                      
                  <div class="card">
                    <div class="card-close">
                      <div class="dropdown">
                        <button type="button" id="closeCard" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="dropdown-toggle"><i class="fa fa-ellipsis-v"></i></button>
                        <div aria-labelledby="closeCard" class="dropdown-menu has-shadow" style="display: none;"><a href="#" class="dropdown-item remove"> <i class="fa fa-times"></i>Close</a><a href="#" class="dropdown-item edit"> <i class="fa fa-gear"></i>Edit</a></div>
                      </div>
                    </div>
                    <div class="card-header d-flex align-items-center">
                      <h3 class="h4">Crear Receta</h3>
                    </div>
                    <div class="card-body">
                     {!! Form::open(['route'=>'recetas.store','method'=>'POST','class'=>'form-horizontal']) !!}
                      
                       
                        
                        <div class="form-group row">
                          <label for="Inputproducto" class="col-sm-3 form-control-label">Producto</label>
                       
                         
                          <select name="id_producto" class="mx-sm-3 form-control" >
                          <option value="">Seleccione...</option>
                        @foreach ($productos as $producto) 
                          <option value={!!$producto->id_producto!!}>{!!$producto->tit_producto!!}</option>
                         @endforeach </select>
                          </div>
                        <div class="form-group row">
                          <label for="cantidad" class="col-sm-3 form-control-label">Cantidad Produccion</label>
                          <input name="cantidad_produccion" id="cantidad" type="text" placeholder="Cantidad a producir" class="mx-sm-3 form-control">
                        </div>
                         <div class="form-group row">
                          <input type="submit" value="Crear Receta" class="mx-sm-3 btn btn-primary">
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
                      <h3 class="h4">Listado de recetas </h3>
                    </div>
                    <div class="card-body">
                      <table class="table table-striped">
                        <thead>
                          <tr>
                            
                            <th>Id</th>
                            <th>receta</th>
                            <th>Relacion</th>
                            
                            

                          </tr>
                        </thead>
                        <tbody>
                        @foreach ($recetas as $receta)
                        
                        
                          <tr>
                            <th scope="row">{{$receta->id_receta}}</th>
                           <th> {{$producto->tit_producto}}</th>

                            <td>{{$receta->cantidad_produccion}}</td>
                            
                            <td>  <button class="btn btn-sm btn-success"><i class="fa fa-check"></i> </button>
								  <button class="btn btn-sm btn-warning"><i class="fa fa-pencil"></i> </button>
								  <button action="/recetas.destroy/{$id}" class="btn btn-sm btn-danger"><i class="fa fa-times"></i> </button>
													  
                            </td>
                          </tr>
                          
                        @endforeach
                         
                            
                           
                          
                         
                        </tbody>
                      </table>
                    </div>
                  </div>
@endsection
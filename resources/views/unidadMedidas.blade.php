@extends('master')
@section('titulo','Unidades de medida')
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
                      <h3 class="h4">Crear Unidad de Medida</h3>
                    </div>
                    <div class="card-body">
                     {!! Form::open(['route'=>'unidades.store','method'=>'POST','class'=>'form-horizontal']) !!}
                      
                        <div class="form-group row">
                          <label for="InputUnidad" class="col-sm-3 form-control-label">Unidad de Medida</label>
                          <input name="tit_unidad_medida" id="InputUnidad" type="text" placeholder="Ej. GR, KG, BULTO, BOLSA" class="mx-sm-3 form-control">
                        </div>
                        
                        <div class="form-group row">
                          <label class="col-sm-3 form-control-label">Relacion numerica entre esta unidad y la unidad minima.</label>
                          
                            <input name="relacion" placeholder="Ej. 1 KG->1000" class="mx-sm-3 form-control" type="text">
                         </div>
                        <div class="form-group row">
                          <input type="submit" value="Crear" class="mx-sm-3 btn btn-primary">
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
                      <h3 class="h4">Listado de unidades de medida</h3>
                    </div>
                    <div class="card-body">
                      <table class="table table-striped">
                        <thead>
                          <tr>
                            
                            <th>Id</th>
                            <th>Unidad</th>
                            <th>Relacion</th>
                            
                            

                          </tr>
                        </thead>
                        <tbody>
                        @foreach ($unidadMedidas as $Unidad)
                        
                        
                          <tr>
                            <th scope="row">{{$Unidad->id_unidad_medida}}</th>
                            <th>{{$Unidad->tit_unidad_medida}}</th>
                            <td>{{$Unidad->relacion}}</td>
                            
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
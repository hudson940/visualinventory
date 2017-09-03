@extends('master')
@section('titulo','Inventario')
@section('dashboard','Inventario')
@section('contenido')

<div class="card">
                    <div class="card-close">
                      <div class="dropdown">
                        <button type="button" id="closeCard" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="dropdown-toggle"><i class="fa fa-ellipsis-v"></i></button>
                        <div aria-labelledby="closeCard" class="dropdown-menu has-shadow"><a href="#" class="dropdown-item remove"> <i class="fa fa-times"></i>Close</a><a href="#" class="dropdown-item edit"> <i class="fa fa-gear"></i>Edit</a></div>
                      </div>
                    </div>
                    <div class="card-header d-flex align-items-center">
                      <h3 class="h4">Listado de Existencias</h3>
                    </div>
                    <div class="card-body">
                      <table class="table table-striped">
                        <thead>
                          <tr>
                            <th>Id</th>
                            <th>Producto</th>
                            <th>Entradas</th>
                            <th>Salidas</th>
                            <th>Saldo</th>
                            
                            
                          </tr>
                        </thead>
                        <tbody>
                       
                        </tbody>
                      </table>
                      
                    </div>
                  </div>
                
@endsection
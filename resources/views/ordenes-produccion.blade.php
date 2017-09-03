@extends ('master')
@section ('titulo','Ordenes de Produccion')
@section('dasboard','Produccion')
@section ('contenido')
<div class="card">
<div class="card-header d-flex align-items-center">
                      <h3 class="h4">Orden de Produccion</h3>
                    </div>
                    <div class="card-body">
                    {!!$orden=$ordenProduccions->where('id_op',1)!!}
                    {!! Form::open(['class'=>'form-inline']) !!}
                    
                    {!! Form::label(null,'Fecha', ['class'=>'mx-sm-1 form-control-label']) !!}
                    {!! Form::date('fecha_op',$orden, ['class'=>'mx-sm-1 form-control', 'disabled']) !!}
                    {!! Form::label(null,'Producto', ['class'=>'mx-sm-1 form-control-label']) !!}
                    {!! Form::text('id_producto','Torta', ['class'=>'mx-sm-1 form-control','disabled'=>'']) !!}
                    {!! Form::label(null,'Cantidad', ['class'=>'mx-sm-1 form-control-label']) !!}
                    {!! Form::number('cantidad','5', ['class'=>'mx-sm-1 form-control','disabled'=>'']) !!}
                    {!! Form::close() !!}
                    
                    </div>


                        
                        <div class="card-header d-flex align-items-center">
                      <h3 class="h4">Productos</h3>
                    </div>
                      <table class="table">
                      <thead>
                          <tr>
                            
                            <th>Producto</th>
                            <th>Cantidad</th>
                            <th>Accion</th>
                          </tr>
                        </thead>
                        <tbody>
                        <td></td>
                        
                        <td>
                        
                        </td>
                        <td>    
                        
                        </td>
                        </tbody> 
                        </table>
                        </div>
<div class="card">
                    <div class="card-close">
                      <div class="dropdown">
                        <button type="button" id="closeCard" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="dropdown-toggle"><i class="fa fa-ellipsis-v"></i></button>
                        <div aria-labelledby="closeCard" class="dropdown-menu has-shadow" style="display: none;"><a href="#" class="dropdown-item remove"> <i class="fa fa-times"></i>Close</a><a href="#" class="dropdown-item edit"> <i class="fa fa-gear"></i>Edit</a></div>
                      </div>
                    </div>
                    <div class="card-header d-flex align-items-center">
                      <h3 class="h4">Agregar Productos</h3>
                    </div>
                    <div class="card-body">
                      <form class="form-inline">
                      <div class="form-group">
                          <label for="producto" class="sr-only">Producto</label>
                          <input id="producto" placeholder="" class="mx-sm-3 form-control" type="text">
                        </div>
                        <div class="form-group">
                          <label for="producto" class="sr-only">Cantidad</label>
                          <input id="producto" placeholder="" class="mx-sm-3 form-control form-control" type="text">
                        </div>
                        <div class="form-group">
                          <input value="Agregar" class="mx-sm-3 btn btn-primary" type="submit">
                        </div>
                        </form>
                        </div>      
                       
                    </div>
                  
@endsection


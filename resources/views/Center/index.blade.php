
@extends('samples')

@section('content')

<div class="containertable">

<div class="row">
            <div class="col-lg-12">
              <div class="card">
                <div class="card-header">
                  <a href="{{ route('center.create') }}">
                  <h4 class="header header-primary text-center icon-plus"> Nuevo Centro</h4></a>
                </div>
                <div class="card-body">
                  <table class="table table-responsive-sm table-bordered table-striped table-sm">
                    <thead>
                      <tr>
                        <th class="text-center">ID</th>
                        <th class="text-center">NOMBRE</th>
                        <th class="text-center">CALLE</th>
                        <th class="text-center">#INTERIOR</th>
                        <th class="text-center">#EXTERIOR</th>
                        <th class="text-center">LONGITUD</th>
                        <th class="text-center">LATITUD</th>
                        <th class="text-center">GERENTE</th>
                        <th class="text-center">CATEGORÍA</th>
                        <th class="text-center">ACCIONES</th>
                      </tr>
                    </thead>
                    <tbody>
                       <?php 
                        $center = App\center::all(); ?>
                           
                          @foreach($center as $cent)



                          <tr>
                            <td class="text-center">{{$cent->id}}</td>
                            <td class="text-center">{{$cent->name}}</td>
                            <td class="text-center">{{$cent->street}}</td>
                            <td class="text-center">{{$cent->outdoornum}}</td>
                            <td class="text-center">{{$cent->interiornum}}</td>                     
                            <td class="text-center">{{$cent->longitude}}</td>
                            <td class="text-center">{{$cent->latitude}}</td>
                            <td class="text-center">{{$cent->user()->first()->name}}</td>
                            <td class="text-center">{{$cent->category}}</td>
            
                            <td class="td-actions text-center">
                            <div class="row">
                              <div class="col-xs-6 col-sm-6 col-md-6">
                                <div class="form-group">
                                <a type="button" rel="tooltip" title="Editar" class="btn btn-primary btn-round btn-sm" href="{{action('CenterController@edit', $cent->id)}}">
                                <i class="fa fa-edit"></i>
                                </a>
                                </div>
                              </div>
                            
                
                            <div class="col-xs-6 col-sm-6 col-md-6">
                              <div class="form-group">
                            <form action="{{action('CenterController@destroy', $cent->id)}}" method="post">
                            {{csrf_field()}} <input name="_method" type="hidden" value="DELETE">

                            <button rel="tooltip" title="Eliminar" class="btn btn-danger btn-round btn-sm">
                              <i class="fa fa-times"></i>
                
                            </button>

                            </form>
                          </div>
                        </div>
                            </div>
                            </td>
        
                          </tr>
      

                      <!--<tr>
                        <td>1</td>
                        <td>2012/01/01</td>
                       
                        <td>
                          <span class="badge badge-success">Active</span>
                        </td>
                      </tr>
                      <tr>
                        <td>2</td>
                        <td>2012/02/01</td>
                        
                        <td>
                          <span class="badge badge-danger">Banned</span>
                        </td>
                      </tr>
                      <tr>
                        <td>3</td>
                        <td>2012/02/01</td>
                        
                        <td>
                          <span class="badge badge-secondary">Inactive</span>
                        </td>
                      </tr>
                      <tr>
                        <td>3</td>
                        <td>2012/03/01</td>
                        
                        <td>
                          <span class="badge badge-warning">Pending</span>
                        </td>
                      </tr>
                      <tr>
                        <td>4</td>
                        <td>2012/01/21</td>
                        
                        <td>
                          <span class="badge badge-success">Active</span>
                        </td>
                      </tr>-->

                        @endforeach
                    </tbody>
                  </table>
                  <!--<nav>
                    <ul class="pagination">
                      <li class="page-item"><a class="page-link" href="#">Prev</a></li>
                      <li class="page-item active">
                        <a class="page-link" href="#">1</a>
                      </li>
                      <li class="page-item"><a class="page-link" href="#">2</a></li>
                      <li class="page-item"><a class="page-link" href="#">3</a></li>
                      <li class="page-item"><a class="page-link" href="#">4</a></li>
                      <li class="page-item"><a class="page-link" href="#">Sig</a></li>
                    </ul>
                  </nav>-->
                </div>
              </div>
            </div>
            <!--/.col-->
          </div>
        </div>

@endsection
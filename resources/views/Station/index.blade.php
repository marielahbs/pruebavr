
@extends('samples')

@section('content')

<div class="containertable">

<div class="row">
            <div class="col-lg-12">
              <div class="card">
                <div class="card-header">
                  <a href="{{ route('station.create') }}">
                  <h4 class="header header-primary text-center icon-plus"> Nueva Estación</h4></a>
                </div>
                <div class="card-body">
                  <table class="table table-responsive-sm table-bordered table-striped table-sm">
                    <thead>
                      <tr>
                        <th class="text-center">ID</th>
                        <th class="text-center">CENTROS</th>
                        <th class="text-center">DEPARTAMENTOS</th>
                        <th class="text-center">DIFICULTAD</th>
                        <th class="text-center">ACCIONES</th>
                      </tr>
                    </thead>
                    <tbody>
                       <?php 
                        $station = App\station::all(); ?>
                           
                          @foreach($station as $stat)



                          <tr>
                            <td class="text-center">{{$stat->id}}</td>
                            <td class="text-center">{{$stat->center()->first()->name}}</td>
                            <td class="text-center">{{$stat->department()->first()->name}}</td>
                            <td class="text-center">{{$stat->difficulty}}</td>
                                       
                            <td class="td-actions text-center">
                            <div class="row">
                              <div class="col-xs-6 col-sm-6 col-md-6">
                                <div class="form-group">
                                <a type="button" rel="tooltip" title="Editar" class="btn btn-primary btn-round btn-sm" href="{{action('StationController@edit', $stat->id)}}">
                                <i class="fa fa-edit"></i>
                                </a>
                                </div>
                              </div>
                            
                
                            <div class="col-xs-6 col-sm-6 col-md-6">
                              <div class="form-group">
                            <form action="{{action('StationController@destroy', $stat->id)}}" method="post">
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
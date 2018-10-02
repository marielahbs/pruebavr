
@extends('samples')

@section('content')

<div class="containertableusuario">

<div class="row">
            <div class= "col-lg-12">
              <div class="card">
                <div class="card-header">
                   <a href="{{ route('user.create') }}">
                    <h4 class="header header-primary text-center icon-user"> CREAR USUARIO</h4>
                  </a>
                </div>
                <div class="card-body">
                  <table class="table table-responsive-sm table-bordered table-striped table-sm">
                    <thead>
                      <tr>
                        <th class="text-center">ID</th>
                        <th class="text-center">Nombre</th>
                        <th class="text-center">Ap paterno</th>
                        <th class="text-center">Ap materno</th>
                        <th class="text-center">Fecha nacimiento</th>
                        <th class="text-center">Género</th>
                        <th class="text-center">Teléfono</th>
                        <th class="text-center">Dirección</th>
                        <th class="text-center">Fecha de llegada</th>
                        <th class="text-center">Fecha de capacitación</th>
                        <th class="text-center">Rol</th>
                        <th class="text-center">Cargo</th>
                        <th class="text-center">Depto</th>
                        <th class="text-center">Email</th>
                        
                        <th class="text-center">Acciones</th>
                      </tr>
                    </thead>
                    <tbody>
                       <?php 
                        $user = App\user::all(); ?>
                           
                          @foreach($user as $us)



                          <tr>
                            <td class="text-center">{{$us->id}}</td>
                            <td class="text-center">{{$us->name}}</td>
                            <td class="text-center">{{$us->fatherlastname}}</td>
                            <td class="text-center">{{$us->motherlastname}}</td>
                            <td class="text-center">{{$us->birthdate}}</td>
                            <td class="text-center">{{$us->gender}}</td>
                            <td class="text-center">{{$us->phonenumber}}</td>
                            <td class="text-center">{{$us->address}}</td>
                            <td class="text-center">{{$us->arrivaldate}}</td>
                            <td class="text-center">{{$us->registrationdate}}</td>  
                            <td class="text-center">{{$us->role()->first()->name}}</td>
                            <td class="text-center">{{$us->position()->first()->name}}</td>
                            <td class="text-center">{{$us->department()->first()->name}}</td>
                            <td class="text-center">{{$us->email}}</td>
                            
                            <td class="td-actions text-center">
                              <div class="row">
                                <div class="col-xs-6 col-sm-6 col-md-6">
                                  <div class="form-group">
                                    <a type="button" rel="tooltip" title="Editar" class="btn btn-primary btn-round btn-sm" href="{{action('UserController@edit', $us->id)}}">
                                      <i class="fa fa-edit"></i>
                                    </a>
                                  </div>
                                </div>
                                <div class="form-group">
                                  <form action="{{action('UserController@destroy', $us->id)}}" method="post">
                                    {{csrf_field()}} <input name="_method" type="hidden" value="DELETE">
                                    <button rel="tooltip" title="Eliminar" class="btn btn-danger btn-round btn-sm">
                                      <i class="icon-trash"></i>
                                    </button>
                                  </form>
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
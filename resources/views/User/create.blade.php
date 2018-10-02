@extends('samples')
@section('content')




  <div class="container">
    <div class="row justify-content-center">
      <div class="col-md-6">

        @if (count($errors) > 0)
      <div class="alert alert-danger">
        <strong>Error!</strong> Revise los campos obligatorios.<br><br>
        <ul>
          @foreach ($errors->all() as $error)
          <li>{{ $error }}</li>
          @endforeach
        </ul>
      </div>
      @endif
      @if(Session::has('success'))
      <div class="alert alert-info">
        {{Session::get('success')}}
      </div>
      @endif 
      
        <div class="card mx-4">
          <div class="card-body p-4">
            
            
            <h4 class="header header-primary text-center">REGISTRO DE USUARIO</h4>      
            <form method="POST" action="{{ route('user.store') }}">{{ csrf_field() }} 

            <!----------------------------------REGISTRO--------------------------------------->
            
            
              <p class="text-divider text-center">Información personal</p>
            <div class="row">



                <div class="col-xs-6 col-sm-6 col-md-6">
                  <div class="form-group">
                    <span class="input-group-addon"><i class="icon-user"></i></span>
                    <input type="text" name="name" class="form-control"placeholder="Nombre">
                  </div>
                </div>              
  
              
                <div class="col-xs-6 col-sm-6 col-md-6">
                  <div class="form-group">
                    <span class="input-group-addon"><i class="icon-user"></i></span>
                    <input type="text" name="fatherlastname" class="form-control"placeholder="Apellido Paterno">
                  </div>
                </div>


                <div class="col-xs-6 col-sm-6 col-md-6">
                  <div class="form-group">
                    <span class="input-group-addon"><i class="icon-user"></i></span>
                    <input type="text" name="motherlastname" class="form-control"placeholder="Apellido Materno">
                  </div>
                </div> 


                <div class="col-xs-6 col-sm-6 col-md-6">
                  <div class="form-group">
                    <span class="input-group-addon"><i class="icon-calendar"> Fecha de nacimiento</i></span>
                    <input type="date" name="birthdate" class="form-control" placeholder="Fecha de Nacimiento">
                  </div>
                </div>

                <div class="col-xs-6 col-sm-6 col-md-6">
                  <div class="form-group">
                    <span class="input-group-addon"><i class="icon-people"></i></span>
                    <input type="text" name="gender" class="form-control" placeholder="Género">
                  </div>
                </div>

                  <div class="col-xs-6 col-sm-6 col-md-6">
                    <div class="form-group">
                      <span class="input-group-addon"><i class="icon-phone"></i></span>
                      <input type="text" name="phonenumber" class="form-control" placeholder="Telefóno">
                    </div>
                  </div>


                  <div class="col-sm-12">
                    <div class="form-group">
                      <span class="input-group-addon"><i class="icon-location-pin"></i></span>
                      <input type="text" name="address" class="form-control" placeholder="Dirección">
                    </div>
                  </div>

            </div><!--cierre de div row-->


                    <!----------------------------------FECHAS-------------------------------------> 

                    <p class="text-divider text-center">Información de la empresa</p>

            <div class="row">

                    <div class="col-xs-6 col-sm-12 col-md-6">
                      <div class="form-group">
                    <span class="input-group-addon"><i class="icon-calendar"> Fecha ingreso a empresa</i></span>
                    <input type="date" name="arrivaldate" class="form-control" placeholder="Fecha de ingreso a empresa">
                      </div>
                    </div>


                    <div class="col-xs-6 col-sm-6 col-md-6">
                      <div class="form-group">
                    <span class="input-group-addon"><i class="icon-calendar"> Fecha de capacitación</i></span>
                    <input type="date" name="registrationdate" class="form-control" placeholder="Fecha de capacitación">
                      </div>
                    </div>

                    <!--------------------------------COMBOBOXES------------------------------------->  


                    <div class="col-xs-4 col-sm-4 col-md-4">
                      <div class="form-group">
                        <span class="input-group-addon"><i class="icon-globe"> Rol</i></span>
                        <select class="form-control" name="role_id">
                          <option selected>Selecciona</option>
                            <?php $roles = App\role::all(); ?>
                            @if($roles->count() > 0)
                            @foreach($roles as $role)
                          <option value="{{$role->id}}">{{$role->name}}</option>
                            @endForeach
                            @else
                              No Record Found
                            @endif  
                        </select>
                      </div>
                    </div>

                    <div class="col-xs-4 col-sm-4 col-md-4">
                      <div class="form-group">
                    <span class="input-group-addon"><i class="icon-map"> Cargo</i></span>
                      <select class="form-control" name="position_id">
                        <option>Selecciona</option>
                         <?php $pos = App\position::all(); ?>
                        @if($pos->count() > 0)
                        @foreach($pos as $p)
                          <option value="{{$p->id}}">{{$p->name}}</option>
                        @endForeach
                        @else
                          No Record Found
                        @endif  
                      </select>
                      </div>
                    </div>

                    <div class="col-xs-4 col-sm-4 col-md-4">
                      <div class="form-group">
                    <span class="input-group-addon"><i class="icon-direction">Departamento</i></span>
                      <select class="form-control" name="department_id">
                        <option selected>Selecciona</option>
                         <?php $dep = App\department::all(); ?>
                        @if($dep->count() > 0)
                        @foreach($dep as $r)
                          <option value="{{$r->id}}">{{$r->name}}</option>
                        @endForeach
                        @else
                          No Record Found
                        @endif  
                      </select>
                      </div>
                    </div>

            </div><!--cierre de div row-->

            <!----------------------------------------------------------------------------> 

                    <p class="text-divider text-center">Información de la cuenta</p>
            <div class="row">

                <div class="col-sm-12">
                <div class="form-group">
                  <span class="input-group-addon">@</span>
                  <input type="text" name="email" class="form-control" placeholder="Correo electrónico">
                </div>
                </div>


                <div class="col-xs-6 col-sm-6 col-md-6">
                <div class="form-group">
                  <span class="input-group-addon"><i class="icon-lock"></i></span>
                  <input type="password" name="password" class="form-control" placeholder="Contraseña">
                </div>
                </div>


                <div class="col-xs-6 col-sm-6 col-md-6">
                <div class="form-group">
                  <span class="input-group-addon"><i class="icon-lock"></i></span>
                  <input type="password" name="password_confirmation" class="form-control" placeholder="Confirmar contraseña">
                </div>
                </div>


            </div><!--cierre de div row-->


            <!--------------------------------------BOTONES-------------------------------------> 


              <!--<button type="submit" class="btn btn-block btn-warning">Crea tu cuenta</button>-->

              <div class="card-footer">
                  <div class="row">

                  <div class="col-xs-6 col-sm-6 col-md-6">
                    <div class="form-group">
                  <input type="submit"  value="Guardar" class="btn btn-success btn-block">
                  </div>
                </div>
            </form>

            <div class="col-xs-6 col-sm-6 col-md-6">
                    <div class="form-group">
          <a href="{{ route('user.index') }}" class="btn btn-info btn-block" >Atrás</a>
            </div>
          </div>
        </div>
      </div>

            <!--<a href="/login" class="btn btn-block btn-secondary mt-2">¿Ya tienes una cuenta? Ingresa</a>-->

          </div><!--cierre de div card-body p-4-->




          <!--<div class="card-footer p-4">
            <div class="row">
              <div class="col-6">
                <button class="btn btn-block btn-facebook" type="button">
                  <span>facebook</span>
                </button>
              </div>
              <div class="col-6">
                <button class="btn btn-block btn-twitter" type="button">
                  <span>twitter</span>
                </button>
              </div>
            </div>
          </div>-->

 





          
      


        </div><!--cierre div card mx-4-->
      </div><!--cierre div col-md-6-->
    </div><!--cierre div row justify-content-center-->
  </div><!--cierre div container-->





@endsection
@extends('samples')
@section('content')

<div class="containers">
	<div class="col-sm-6">

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


 		<div class="card">
             <div class="card-header">
                <h4 class="header header-primary text-center">Editar Sesión</h4>
             </div>



                <div class="card-body">

                  	<form method="POST" action="{{ route('session.update',$sess->id) }}"  role="form"> {{ csrf_field() }}

                   	<input name="_method" type="hidden" value="PATCH">
                    <div class="form-group">
                      <input type="time" name="time" id="time"  class="form-control input-sm" placeholder="Tiempo" value="{{$sess->time}}" >
                    </div>

                    <div class="form-group">
                      <input type="text" name="incorrectanswer" id="incorrectanswer"  class="form-control input-sm" placeholder="Respuesta incorrecta" value="{{$sess->incorrectanswer}}" >
                    </div>

                    <div class="form-group">
                      <input type="text" name="correctanswer" id="correctanswer"  class="form-control input-sm" placeholder="Respuesta correcta" value="{{$sess->correctanswer}}" >
                    </div>


                    <div class="form-group">
                      <input type="text" name="rating" id="rating"  class="form-control input-sm" placeholder="Rating" value="{{$sess->rating}}" >
                    </div>
                    
                    <div class="form-group">
                      <span class="input-group-addon"><i class="icon-screen-desktop"> Estaciones</i></span>
                        <select class="form-control" name="station_id">
                        <option>Selecciona</option>
                         <?php $stat = App\station::all(); ?>
                        @if($stat->count() > 0)
                        @foreach($stat as $r)
                          <option value="{{$r->id}}" selected>{{$r->id}}</option>
                        @endForeach
                        @else
                          No Record Found
                        @endif  
                      </select>
                    </div>
                    
                    <div class="form-group">
                      <span class="input-group-addon"><i class="icon-direction"> Departamentos</i></span>
                        <select class="form-control" name="department_id">
                        <option>Selecciona</option>
                         <?php $dep = App\department::all(); ?>
                        @if($dep->count() > 0)
                        @foreach($dep as $r)
                          <option value="{{$r->id}}" selected>{{$r->name}}</option>
                        @endForeach
                        @else
                          No Record Found
                        @endif  
                      </select>
                    </div>      
                                      	
                </div>


                <div class="card-footer">
                	<div class="row">

                	<div class="col-xs-6 col-sm-6 col-md-6">
                		<div class="form-group">
                 		<input type="submit"  value="Actualizar" class="btn btn-success btn-block">
             			</div>
             		</div>


					<div class="col-xs-6 col-sm-6 col-md-6">
                 		<div class="form-group">
					<a href="{{ route('session.index') }}" class="btn btn-info btn-block" >Atrás</a>
						</div>
					</div>
					
					</div>
                </div>
             </form>

        </div>

    </div>
</div>



@endsection
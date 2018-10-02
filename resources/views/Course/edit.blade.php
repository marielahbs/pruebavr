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
                <h4 class="header header-primary text-center">Editar Curso</h4>
             </div>



                <div class="card-body">

                  	<form method="POST" action="{{ route('course.update',$curs->id) }}"  role="form"> {{ csrf_field() }}

                   	<input name="_method" type="hidden" value="PATCH">
                    <div class="form-group">
                      <input type="text" name="name" id="name" class="form-control input-sm" value="{{$curs->name}}">
                    </div>

                    <div class="form-group">
                        <input type="text" name="description" id="description" class="form-control input-sm" value="{{$curs->description}}">
                    </div>

                    <div class="form-group">
                        <input type="text" name="category" id="category" class="form-control input-sm" value="{{$curs->category}}">
                    </div>

                    <div class="form-group">
                       <span class="input-group-addon"><i class="icon-shield"> ManagerID</i></span>
                        <select class="form-control" name="user_id">
                        <option>Selecciona</option>
                         <?php $us = App\user::all(); ?>
                        @if($us->count() > 0)
                        @foreach($us as $r)
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
					<a href="{{ route('course.index') }}" class="btn btn-info btn-block" >Atrás</a>
						</div>
					</div>
					
					</div>
                </div>
             </form>

        </div>

    </div>
</div>



@endsection
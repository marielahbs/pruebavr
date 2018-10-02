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
                <h4 class="header header-primary text-center">Nuevo Tema</h4>
             </div>



                <div class="card-body">

                  <p class="text-divider text-center">Ingresa el tema</p>

                    <form method="POST" action="{{ route('subject.store') }}" role="form"> {{ csrf_field() }}
                   
                    <div class="form-group">
                       <span class="input-group-addon"><i class="icon-notebook"> Cursos</i></span>
                        <select class="form-control" name="course_id">
                        <option>Selecciona</option>
                         <?php $curs = App\course::all(); ?>
                        @if($curs->count() > 0)
                        @foreach($curs as $r)
                          <option value="{{$r->id}}">{{$r->name}}</option>
                        @endForeach
                        @else
                          No Record Found
                        @endif  
                      </select>
                    </div>

                    <div class="form-group">
                      <input type="text" name="name" id="name" class="form-control input-sm" placeholder="Nombre">
                    </div>

                    <div class="form-group">
                        <input type="text" name="description" id="description" class="form-control input-sm" placeholder="Descripción">
                    </div>
                    
                </div>


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
          <a href="{{ route('subject.index') }}" class="btn btn-info btn-block" >Atrás</a>
            </div>
          </div>
          
          </div>
                </div>
             

        </div>

    </div>
</div>









@endsection
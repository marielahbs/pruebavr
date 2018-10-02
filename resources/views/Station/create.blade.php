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
                <h4 class="header header-primary text-center">Nueva Estación</h4>
             </div>



                <div class="card-body">

                  <p class="text-divider text-center">Ingresa la estación</p>

                    <form method="POST" action="{{ route('station.store') }}" role="form"> {{ csrf_field() }}
                   

                   <div class="form-group">
                      <span class="input-group-addon"><i class="icon-home"> Centros</i></span>
                        <select class="form-control" name="center_id">
                        <option>Selecciona</option>
                         <?php $cent = App\center::all(); ?>
                        @if($cent->count() > 0)
                        @foreach($cent as $r)
                          <option value="{{$r->id}}">{{$r->name}}</option>
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
                          <option value="{{$r->id}}">{{$r->name}}</option>
                        @endForeach
                        @else
                          No Record Found
                        @endif  
                      </select>
                    </div>

                    <div class="form-group">
                      <input type="text" name="difficulty" id="difficulty"  class="form-control input-sm" placeholder="Dificultad">
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
          <a href="{{ route('station.index') }}" class="btn btn-info btn-block" >Atrás</a>
            </div>
          </div>
          
          </div>
                </div>
             

        </div>

    </div>
</div>









@endsection
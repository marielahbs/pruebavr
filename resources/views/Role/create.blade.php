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
                <h4 class="header header-primary text-center">Nuevo Rol</h4>
             </div>



                <div class="card-body">

                  <p class="text-divider text-center">Ingresa el cargo</p>

                    <form method="POST" action="{{ route('role.store') }}" role="form"> {{ csrf_field() }}
                   
                    <div class="form-group">
                      <input type="text" name="name" id="name" class="form-control input-sm" placeholder="Nombre del rol">
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
          <a href="{{ route('role.index') }}" class="btn btn-info btn-block" >Atrás</a>
            </div>
          </div>
          
          </div>
                </div>
             

        </div>

    </div>
</div>









@endsection
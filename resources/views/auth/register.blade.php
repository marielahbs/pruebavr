@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Register</div>

                <div class="panel-body">
                    <form class="form-horizontal" method="POST" action="{{ route('register') }}">
                        {{ csrf_field() }}

                        <!-- Nombre -->
                        <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                            <label for="name" class="col-md-4 control-label">Nombre</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control" name="name" value="{{ old('name') }}" required autofocus>

                                @if ($errors->has('name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <!-- Apellido Paterno -->
                        <div class="form-group{{ $errors->has('fatherlastname') ? ' has-error' : '' }}">
                            <label for="fatherlastname" class="col-md-4 control-label">Apellido Paterno</label>

                            <div class="col-md-6">
                                <input id="fatherlastname" type="text" class="form-control" name="fatherlastname" value="{{ old('fatherlastname') }}" required autofocus>

                                @if ($errors->has('fatherlastname'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('fatherlastname') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <!-- Apellido Materno -->
                        <div class="form-group{{ $errors->has('motherlastname') ? ' has-error' : '' }}">
                            <label for="motherlastname" class="col-md-4 control-label">Apellido Materno</label>

                            <div class="col-md-6">
                                <input id="motherlastname" type="text" class="form-control" name="motherlastname" value="{{ old('motherlastname') }}" required autofocus>

                                @if ($errors->has('motherlastname'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('motherlastname') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <!-- Género -->
                        <div class="form-group{{ $errors->has('gender') ? ' has-error' : '' }}">
                            <label for="gender" class="col-md-4 control-label">Género</label>

                            <div class="col-md-6">
                                <input id="gender" type="text" class="form-control" name="gender" value="{{ old('gender') }}" required autofocus>

                                @if ($errors->has('gender'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('gender') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <!-- Telefono -->
                        <div class="form-group{{ $errors->has('phonenumber') ? ' has-error' : '' }}">
                            <label for="phonenumber" class="col-md-4 control-label">Teléfono</label>

                            <div class="col-md-6">
                                <input id="phonenumber" type="text" class="form-control" name="phonenumber" value="{{ old('phonenumber') }}" required autofocus>

                                @if ($errors->has('phonenumber'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('phonenumber') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <!-- Dirección -->
                        <div class="form-group{{ $errors->has('address') ? ' has-error' : '' }}">
                            <label for="address" class="col-md-4 control-label">Dirección</label>

                            <div class="col-md-6">
                                <input id="address" type="text" class="form-control" name="address" value="{{ old('address') }}" required autofocus>

                                @if ($errors->has('address'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('address') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                         <!--fecha de ingreso 
                        <div class="form-group{{ $errors->has('arrivaldate') ? ' has-error' : '' }}">
                            <label for="arrivaldate" class="col-md-4 control-label">Fecha de Ingreso a la Empresa</label>

                            <div class="col-md-6">
                                <input id="arrivaldate" type="date" class="form-control" name="arrivaldate" value="{{ old('arrivaldate') }}" required autofocus>

                                @if ($errors->has('arrivaldate'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('arrivaldate') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>-->

                        
                        <!-- ROL 

                        <div class="form-group{{ $errors->has('roles') ? ' has-error' : '' }}">
                            <label for="roles" class="col-md-4 control-label">Select a Town</label>
                            <div class="col-md-6">
                                <select class="form-control" name="roles" id="roles">
                                    <option value="">Select a Rol</option>
                                    @foreach ($roles as $rol)
                                    <option value="{{ $rol->id }}">{{ ucfirst($role->name) }}</option>
                                    @endforeach
                                </select>
                                @if ($errors->has('role'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('role') }}</strong>
                                </span>
                                @endif
                            </div>
                        </div> 
-->


                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <label for="email" class="col-md-4 control-label">E-Mail Address</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required>

                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                            <label for="password" class="col-md-4 control-label">Contraseña</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control" name="password" required>

                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="password-confirm" class="col-md-4 control-label">Confirmar Contraseña</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    Register
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

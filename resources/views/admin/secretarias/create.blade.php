@extends('layouts.admin')
@section('content')
    <div class="row">
        <h1>Registro de un nuevo secretari@</h1>
    </div>

    <hr>

    <div class="row">
        <div class="col-md-12">
            <div class="card card-outline card-primary">
                <div class="card-header">
                    <h3 class="card-title">LLene los datos</h3>
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                    <form action="{{ url('admin/secretarias/create') }}" method="POST">
                        @csrf
                        <div class="row">
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label for="">Nombres</label> <b>*</b>
                                    <input type="text" value="{{ old('nombres') }}" name="nombres" class="form-control" required>
                                    @error('nombres')
                                    <small style="color: red">{{ $message }}</small>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label for="">Apellidos</label> <b>*</b>
                                    <input type="text" value="{{ old('apellidos') }}" name="apellidos" class="form-control" required>
                                    @error('apellidos')
                                    <small style="color: red">{{ $message }}</small>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label for="">Identificación</label> <b>*</b>
                                    <input type="text" value="{{ old('identificacion') }}" name="identificacion" class="form-control" required>
                                    @error('identificacion')
                                    <small style="color: red">{{ $message }}</small>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label for="">Telefono</label> <b>*</b>
                                    <input type="text" value="{{ old('telefono') }}" name="telefono" class="form-control" required>
                                    @error('telefono')
                                    <small style="color: red">{{ $message }}</small>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        <br>
                        <div class="row">
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label for="">Fecha de nacimiento</label> <b>*</b>
                                    <input type="date" value="{{ old('fecha_nacimiento') }}" name="fecha_nacimiento" class="form-control" required>
                                    @error('fecha_nacimiento')
                                    <small style="color: red">{{ $message }}</small>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-9">
                                <div class="form-group">
                                    <label for="">Dirección</label> <b>*</b>
                                    <input type="text" value="{{ old('direccion') }}" name="direccion" class="form-control" required>
                                    @error('direccion')
                                    <small style="color: red">{{ $message }}</small>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        <br>
                        <div class="row">
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label for="">Correo</label> <b>*</b>
                                    <input type="email" value="{{ old('email') }}" name="email" class="form-control" required>
                                    @error('email')
                                    <small style="color: red">{{ $message }}</small>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label for="">Password</label> <b>*</b>
                                    <input type="password" value="{{ old('password') }}" name="password" class="form-control" required>
                                    @error('password')
                                    <small style="color: red">{{ $message }}</small>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label for="">Password verificación</label> <b>*</b>
                                    <input type="password" name="password_confirmation" class="form-control" required>
                                    @error('password_confirmation')
                                    <small style="color: red">{{ $message }}</small>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-md-12 text-right">
                                <div class="form-group">
                                    <a href="{{ url('admin/secretarias') }}" class="btn btn-secondary">Cancelar</a>
                                    <button type="submit" class="btn btn-primary">Registrar nuevo</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
                <!-- /.card-body -->
            </div>
        </div>
    </div>
@endsection

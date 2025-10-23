@extends('layouts.admin')
@section('content')
    <div class="row">
        <h1>Eliminar secretari@: {{ $secretaria->nombres }} {{ $secretaria->apellidos }}</h1>
    </div>

    <hr>

    <div class="row">
        <div class="col-md-12">
            <div class="card card-danger">
                <div class="card-header">
                    <h3 class="card-title">¿Estas seguro de eliminar este registro?</h3>
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                    <form action="{{ url('admin/secretarias/'.$secretaria->id) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <div class="row">
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label for="">Nombres</label>
                                    <input type="text" value="{{ $secretaria->nombres }}" name="nombres" class="form-control" disabled>
                                    @error('nombres')
                                    <small style="color: red">{{ $message }}</small>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label for="">Apellidos</label>
                                    <input type="text" value="{{ $secretaria->apellidos }}" name="apellidos" class="form-control" disabled>
                                    @error('apellidos')
                                    <small style="color: red">{{ $message }}</small>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label for="">Identificación</label>
                                    <input type="text" value="{{ $secretaria->identificacion }}" name="identificacion" class="form-control" disabled>
                                    @error('identificacion')
                                    <small style="color: red">{{ $message }}</small>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label for="">Telefono</label>
                                    <input type="text" value="{{ $secretaria->telefono }}" name="telefono" class="form-control" disabled>
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
                                    <label for="">Fecha de nacimiento</label>
                                    <input type="date" value="{{ $secretaria->fecha_nacimiento }}" name="fecha_nacimiento" class="form-control" disabled>
                                    @error('fecha_nacimiento')
                                    <small style="color: red">{{ $message }}</small>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-9">
                                <div class="form-group">
                                    <label for="">Dirección</label>
                                    <input type="text" value="{{ $secretaria->direccion }}" name="direccion" class="form-control" disabled>
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
                                    <label for="">Correo</label>
                                    <input type="email" value="{{ $secretaria->user->email  }}" name="email" class="form-control" disabled>
                                    @error('email')
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
                                    <button type="submit" class="btn btn-danger">Eliminar registro</button>
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

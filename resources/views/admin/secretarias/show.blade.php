@extends('layouts.admin')
@section('content')
    <div class="row">
        <h1>Secretari@: {{ $secretaria->nombres }} {{ $secretaria->apellidos }}</h1>
    </div>

    <hr>

    <div class="row">
        <div class="col-md-12">
            <div class="card card-outline card-info">
                <div class="card-header">
                    <h3 class="card-title">Datos registrados</h3>
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                        <div class="row">
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label for="">Nombres</label>
                                    <p>{{ $secretaria->nombres }}</p>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label for="">Apellidos</label>
                                    <p>{{ $secretaria->apellidos }}</p>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label for="">Identificación</label>
                                    <p>{{ $secretaria->identificacion }}</p>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label for="">Telefono</label>
                                    <p>{{ $secretaria->telefono }}</p>
                                </div>
                            </div>
                        </div>
                        <br>
                        <div class="row">
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label for="">Fecha de nacimiento</label>
                                    <p>{{ $secretaria->fecha_nacimiento }}</p>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="">Dirección</label>
                                    <p>{{ $secretaria->direccion }}</p>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label for="">Correo</label>
                                    <p>{{ $secretaria->user->email }}</p>
                                </div>
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-md-12 text-right">
                                <div class="form-group">
                                    <a href="{{ url('admin/secretarias') }}" class="btn btn-secondary">Volver</a>
                                </div>
                            </div>
                        </div>
                </div>
                <!-- /.card-body -->
            </div>
        </div>
    </div>
@endsection

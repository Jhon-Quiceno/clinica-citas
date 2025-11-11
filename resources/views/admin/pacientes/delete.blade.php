@extends('layouts.admin')
@section('content')
    <div class="row">
        <h1>Eliminar paciente: {{ $paciente->nombres }} {{ $paciente->apellidos }}</h1>
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
                    <form action="{{ url('admin/pacientes/'.$paciente->id) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <div class="row">
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label for="">Nombres</label>
                                    <input type="text" value="{{ $paciente->nombres }}" name="nombres" class="form-control" disabled>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label for="">Apellidos</label>
                                    <input type="text" value="{{ $paciente->apellidos }}" name="apellidos" class="form-control" disabled>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label for="">Identificación</label>
                                    <input type="text" value="{{ $paciente->identificacion }}" name="identificacion" class="form-control" disabled>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label for="">EPS</label>
                                    <input type="text" value="{{ $paciente->eps }}" name="eps" class="form-control" disabled>
                                </div>
                            </div>
                        </div>
                        <br>
                        <div class="row">
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label for="">Fecha de nacimiento</label>
                                    <input type="date" value="{{ $paciente->fecha_nacimiento }}" name="fecha_nacimiento" class="form-control" disabled>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label for="">Género</label>
                                    <input type="text" value="{{ $paciente->genero }}" name="genero" class="form-control" disabled>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label for="">Telefono</label>
                                    <input type="text" value="{{ $paciente->telefono }}" name="telefono" class="form-control" disabled>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label for="">Correo del Paciente</label>
                                    <input type="email" value="{{ $paciente->correo }}" name="correo" class="form-control" disabled>
                                </div>
                            </div>
                        </div>
                        <br>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="">Dirección</label>
                                    <input type="text" value="{{ $paciente->direccion }}" name="direccion" class="form-control" disabled>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="">Contacto de Emergencia</label>
                                    <input type="text" value="{{ $paciente->contacto_emergencia }}" name="contacto_emergencia" class="form-control" disabled>
                                </div>
                            </div>
                        </div>
                        <br>
                        <div class="row">
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="">Grupo Sanguíneo</label>
                                    <input type="text" value="{{ $paciente->grupo_sanguineo }}" name="grupo_sanguineo" class="form-control" disabled>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="">Alergias</label>
                                    <input type="text" value="{{ $paciente->alergias }}" name="alergias" class="form-control" disabled>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="">Observaciones</label>
                                    <input type="text" value="{{ $paciente->observaciones }}" name="observaciones" class="form-control" disabled>
                                </div>
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-md-12 text-right">
                                <div class="form-group">
                                    <a href="{{ url('admin/pacientes') }}" class="btn btn-secondary">Cancelar</a>
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


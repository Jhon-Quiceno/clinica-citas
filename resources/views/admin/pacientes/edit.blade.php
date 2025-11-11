@extends('layouts.admin')
@section('content')
    <div class="row">
        <h1>Modificar paciente: {{ $paciente->nombres }} {{ $paciente->apellidos }}</h1>
    </div>

    <hr>

    <div class="row">
        <div class="col-md-12">
            <div class="card card-outline card-success">
                <div class="card-header">
                    <h3 class="card-title">LLene los datos</h3>
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                    <form action="{{ url('admin/pacientes/'.$paciente->id) }}" method="POST">
                        @csrf
                        @method('PUT')
                        <div class="row">
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label for="">Nombres</label> <b>*</b>
                                    <input type="text" value="{{ $paciente->nombres }}" name="nombres" class="form-control" required>
                                    @error('nombres')
                                    <small style="color: red">{{ $message }}</small>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label for="">Apellidos</label> <b>*</b>
                                    <input type="text" value="{{ $paciente->apellidos }}" name="apellidos" class="form-control" required>
                                    @error('apellidos')
                                    <small style="color: red">{{ $message }}</small>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label for="">Identificación</label> <b>*</b>
                                    <input type="text" value="{{ $paciente->identificacion }}" name="identificacion" class="form-control" required>
                                    @error('identificacion')
                                    <small style="color: red">{{ $message }}</small>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label for="">EPS</label> <b>*</b>
                                    <input type="text" value="{{ $paciente->eps }}" name="eps" class="form-control" required>
                                    @error('eps')
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
                                    <input type="date" value="{{ $paciente->fecha_nacimiento }}" name="fecha_nacimiento" class="form-control" required>
                                    @error('fecha_nacimiento')
                                    <small style="color: red">{{ $message }}</small>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label for="">Género</label> <b>*</b>
                                    <select name="genero" class="form-control" required>
                                        <option value="">Seleccione...</option>
                                        <option value="M" @if($paciente->genero == 'M') selected @endif>Masculino</option>
                                        <option value="F" @if($paciente->genero == 'F') selected @endif>Femenino</option>
                                        <option value="Otro" @if($paciente->genero == 'Otro') selected @endif>Otro</option>
                                    </select>
                                    @error('genero')
                                    <small style="color: red">{{ $message }}</small>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label for="">Telefono</label> <b>*</b>
                                    <input type="text" value="{{ $paciente->telefono }}" name="telefono" class="form-control" required>
                                    @error('telefono')
                                    <small style="color: red">{{ $message }}</small>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label for="">Correo del Paciente</label> <b>*</b>
                                    <input type="email" value="{{ $paciente->correo }}" name="correo" class="form-control" required>
                                    @error('correo')
                                    <small style="color: red">{{ $message }}</small>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        <br>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="">Dirección</label> <b>*</b>
                                    <input type="text" value="{{ $paciente->direccion }}" name="direccion" class="form-control" required>
                                    @error('direccion')
                                    <small style="color: red">{{ $message }}</small>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="">Contacto de Emergencia</label> <b>*</b>
                                    <input type="text" value="{{ $paciente->contacto_emergencia }}" name="contacto_emergencia" class="form-control" required placeholder="Nombre y teléfono">
                                    @error('contacto_emergencia')
                                    <small style="color: red">{{ $message }}</small>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        <br>
                        <div class="row">
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="">Grupo Sanguíneo</label> <b>*</b>
                                    <select name="grupo_sanguineo" class="form-control" required>
                                        <option value="">Seleccione...</option>
                                        <option value="A+" @if($paciente->grupo_sanguineo == 'A+') selected @endif>A+</option>
                                        <option value="A-" @if($paciente->grupo_sanguineo == 'A-') selected @endif>A-</option>
                                        <option value="B+" @if($paciente->grupo_sanguineo == 'B+') selected @endif>B+</option>
                                        <option value="B-" @if($paciente->grupo_sanguineo == 'B-') selected @endif>B-</option>
                                        <option value="AB+" @if($paciente->grupo_sanguineo == 'AB+') selected @endif>AB+</option>
                                        <option value="AB-" @if($paciente->grupo_sanguineo == 'AB-') selected @endif>AB-</option>
                                        <option value="O+" @if($paciente->grupo_sanguineo == 'O+') selected @endif>O+</option>
                                        <option value="O-" @if($paciente->grupo_sanguineo == 'O-') selected @endif>O-</option>
                                    </select>
                                    @error('grupo_sanguineo')
                                    <small style="color: red">{{ $message }}</small>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="">Alergias</label> <b>*</b>
                                    <input type="text" value="{{ $paciente->alergias }}" name="alergias" class="form-control" required>
                                    @error('alergias')
                                    <small style="color: red">{{ $message }}</small>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="">Observaciones</label>
                                    <input type="text" value="{{ $paciente->observaciones }}" name="observaciones" class="form-control" placeholder="Opcional">
                                    @error('observaciones')
                                    <small style="color: red">{{ $message }}</small>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-md-12 text-right">
                                <div class="form-group">
                                    <a href="{{ url('admin/pacientes') }}" class="btn btn-secondary">Cancelar</a>
                                    <button type="submit" class="btn btn-success">Actualizar registro</button>
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


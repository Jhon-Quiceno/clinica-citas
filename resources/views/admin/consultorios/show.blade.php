@extends('layouts.admin')
@section('content')
    <div class="row">
        <h1>Consultorio: {{ $consultorio->nombre }}</h1>
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
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="">Nombre del consultorio</label>
                                <p>{{ $consultorio->nombre }}</p>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="">Ubicación</label>
                                <p>{{ $consultorio->ubicacion }}</p>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="">Capacidad</label>
                                <p>{{ $consultorio->capacidad }}</p>
                            </div>
                        </div>
                    </div>
                    <br>
                    <div class="row">
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="">Teléfono</label>
                                <p>{{ $consultorio->telefono ?? 'N/A' }}</p>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="">Especialidad</label>
                                <p>{{ $consultorio->especialidad }}</p>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="">Estado</label>
                                <p>
                                    @if($consultorio->estado == 'ACTIVO')
                                        <span class="badge badge-success">{{ $consultorio->estado }}</span>
                                    @else
                                        <span class="badge badge-danger">{{ $consultorio->estado }}</span>
                                    @endif
                                </p>
                            </div>
                        </div>
                    </div>
                    <hr>
                    <div class="row">
                        <div class="col-md-12 text-right">
                            <div class="form-group">
                                <a href="{{ url('admin/consultorios') }}" class="btn btn-secondary">Volver</a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /.card-body -->
            </div>
        </div>
    </div>
@endsection


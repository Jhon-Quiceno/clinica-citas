@extends('layouts.admin')
@section('content')
    <div class="row">
        <h1>Modificar horario</h1>
    </div>

    <hr>

    <div class="row">
        <div class="col-md-12">
            <div class="card card-outline card-success">
                <div class="card-header">
                    <h3 class="card-title">Modifique los datos</h3>
                </div>
                <!-- /.card-header -->
                <div class="card-body row">
                    <div class="col-md-3">
                        <form action="{{ url('admin/horarios/'.$horario->id) }}" method="POST">
                            @csrf
                            @method('PUT')
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="">Consultorios</label> <b>*</b>
                                        <select name="consultorio_id" id="consultorio_select" class="form-control">
                                            <option value="">-- Seleccionar Consultorio --</option>
                                            @foreach($consultorios as $consultorio)
                                                <option value="{{ $consultorio->id }}" {{ $horario->consultorio_id == $consultorio->id ? 'selected' : '' }}>
                                                    {{ $consultorio->nombre." - ".$consultorio->ubicacion }}
                                                </option>
                                            @endforeach
                                        </select>
                                        @error('consultorio_id')
                                        <small style="color: red">{{ $message }}</small>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                            <br>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="">Doctores</label> <b>*</b>
                                        <select name="doctor_id" id="doctor_id" class="form-control" required>
                                            <option value="">-- Seleccionar Doctor --</option>
                                            @foreach($doctores as $doctore)
                                                <option value="{{ $doctore->id }}" {{ $horario->doctor_id == $doctore->id ? 'selected' : '' }}>
                                                    {{ $doctore->nombres." ".$doctore->apellidos." - ".$doctore->especialidad }}
                                                </option>
                                            @endforeach
                                        </select>
                                        @error('doctor_id')
                                        <small style="color: red">{{ $message }}</small>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                            <br>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="">Día</label> <b>*</b>
                                        <select name="dia" id="dia" class="form-control" required>
                                            <option value="">-- Seleccionar Día --</option>
                                            <option value="LUNES" {{ $horario->dia == 'LUNES' ? 'selected' : '' }}>Lunes</option>
                                            <option value="MARTES" {{ $horario->dia == 'MARTES' ? 'selected' : '' }}>Martes</option>
                                            <option value="MIERCOLES" {{ $horario->dia == 'MIERCOLES' ? 'selected' : '' }}>Miércoles</option>
                                            <option value="JUEVES" {{ $horario->dia == 'JUEVES' ? 'selected' : '' }}>Jueves</option>
                                            <option value="VIERNES" {{ $horario->dia == 'VIERNES' ? 'selected' : '' }}>Viernes</option>
                                            <option value="SABADO" {{ $horario->dia == 'SABADO' ? 'selected' : '' }}>Sábado</option>
                                            <option value="DOMINGO" {{ $horario->dia == 'DOMINGO' ? 'selected' : '' }}>Domingo</option>
                                        </select>
                                        @error('dia')
                                        <small style="color: red">{{ $message }}</small>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                            <br>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="">Hora Inicio</label> <b>*</b>
                                        <input type="time" value="{{ date('H:i', strtotime($horario->hora_inicio)) }}" name="hora_inicio" class="form-control" required>
                                        @error('hora_inicio')
                                        <small style="color: red">{{ $message }}</small>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="">Hora Final</label> <b>*</b>
                                        <input type="time" value="{{ date('H:i', strtotime($horario->hora_fin)) }}" name="hora_fin" class="form-control" required>
                                        @error('hora_fin')
                                        <small style="color: red">{{ $message }}</small>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                            <hr>
                            <div class="row">
                                <div class="col-md-12 text-right">
                                    <div class="form-group">
                                        <a href="{{ url('admin/horarios') }}" class="btn btn-secondary">Cancelar</a>
                                        <button type="submit" class="btn btn-success">Actualizar Horario</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                    <div class="col-md-9">
                        <div id="consultorio_info">
                            <!-- El calendario se cargará aquí automáticamente -->
                        </div>
                    </div>

                </div>
                <!-- /.card-body -->
            </div>
        </div>
    </div>

    <script>
        var doctorOriginal = {{ $horario->doctor_id }};
        var todosLosDoctores = @json($doctores);

        // Cargar el calendario y doctores al abrir la vista
        $(document).ready(function() {
            var consultorio_id = $('#consultorio_select').val();
            if(consultorio_id) {
                cargarCalendario(consultorio_id);
                cargarDoctoresConsultorio(consultorio_id);
            }
        });

        // Función para cargar el calendario
        function cargarCalendario(consultorio_id) {
            var url = "{{ route('admin.horarios.cargar_datos_consultorios',':id') }}";
            url = url.replace(':id', consultorio_id);
            $.ajax({
                url: url,
                type: 'GET',
                success: function(data) {
                    $('#consultorio_info').html(data);
                },
                error: function() {
                    alert('Error al obtener los datos del consultorio.')
                }
            });
        }

        // Función para cargar doctores del consultorio
        function cargarDoctoresConsultorio(consultorio_id) {
            var url = "{{ route('admin.horarios.cargar_doctores_consultorio',':id') }}";
            url = url.replace(':id', consultorio_id);

            $.ajax({
                url: url,
                type: 'GET',
                success: function(doctores) {
                    var select = $('#doctor_id');
                    select.empty();
                    select.append('<option value="">-- Seleccionar Doctor --</option>');

                    // Si no hay doctores en este consultorio, mostrar todos
                    if(doctores.length === 0) {
                        $.each(todosLosDoctores, function(index, doctor) {
                            var selected = doctor.id == doctorOriginal ? 'selected' : '';
                            select.append('<option value="'+doctor.id+'" '+selected+'>'+doctor.nombres+' '+doctor.apellidos+' - '+doctor.especialidad+'</option>');
                        });
                    } else {
                        // Mostrar solo los doctores que tienen horarios en este consultorio
                        $.each(doctores, function(index, doctor) {
                            var selected = doctor.id == doctorOriginal ? 'selected' : '';
                            select.append('<option value="'+doctor.id+'" '+selected+'>'+doctor.nombres+' '+doctor.apellidos+' - '+doctor.especialidad+'</option>');
                        });

                        // Si el doctor original no está en la lista, agregarlo
                        var doctorEncontrado = doctores.find(d => d.id == doctorOriginal);
                        if(!doctorEncontrado && doctorOriginal) {
                            var doctorOriginalData = todosLosDoctores.find(d => d.id == doctorOriginal);
                            if(doctorOriginalData) {
                                select.append('<option value="'+doctorOriginalData.id+'" selected>'+doctorOriginalData.nombres+' '+doctorOriginalData.apellidos+' - '+doctorOriginalData.especialidad+'</option>');
                            }
                        }
                    }
                },
                error: function() {
                    alert('Error al cargar los doctores del consultorio.');
                }
            });
        }

        // Manejar el cambio de consultorio
        $('#consultorio_select').on('change', function() {
            var consultorio_id = $(this).val();
            if(consultorio_id) {
                cargarCalendario(consultorio_id);
                cargarDoctoresConsultorio(consultorio_id);
            } else {
                $('#consultorio_info').html('');
                // Restaurar todos los doctores
                var select = $('#doctor_id');
                select.empty();
                select.append('<option value="">-- Seleccionar Doctor --</option>');
                $.each(todosLosDoctores, function(index, doctor) {
                    select.append('<option value="'+doctor.id+'">'+doctor.nombres+' '+doctor.apellidos+' - '+doctor.especialidad+'</option>');
                });
            }
        });
    </script>
@endsection


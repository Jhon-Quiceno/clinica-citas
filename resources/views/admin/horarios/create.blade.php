@extends('layouts.admin')
@section('content')
    <div class="row">
        <h1>Registro de un nuevo horario</h1>
    </div>

    <hr>

    <div class="row">
        <div class="col-md-12">
            <div class="card card-outline card-primary">
                <div class="card-header">
                    <h3 class="card-title">Llene los datos</h3>
                </div>
                <!-- /.card-header -->
                <div class="card-body row">
                    <div class="col-md-3">
                        <form action="{{ url('admin/horarios/create') }}" method="POST">

                            @csrf
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="">Consultorios</label> <b>*</b>
                                        <select name="consultorio_id" id="consultorio_select" class="form-control">
                                            <option value="">-- Seleccionar Consultorio --</option>
                                            @foreach($consultorios as $consultorio)
                                                <option value="{{ $consultorio->id }}">{{ $consultorio->nombre." - ".$consultorio->ubicacion }}</option>
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
                                                <option value="{{ $doctore->id }}">{{ $doctore->nombres." ".$doctore->apellidos." - ".$doctore->especialidad }}</option>
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
                                            <option value="LUNES">Lunes</option>
                                            <option value="MARTES">Martes</option>
                                            <option value="MIERCOLES">Miércoles</option>
                                            <option value="JUEVES">Jueves</option>
                                            <option value="VIERNES">Viernes</option>
                                            <option value="SABADO">Sábado</option>
                                            <option value="DOMINGO">Domingo</option>
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
                                        <input type="time" value="{{ old('hora_inicio') }}" name="hora_inicio" class="form-control" required>
                                        @error('hora_inicio')
                                        <small style="color: red">{{ $message }}</small>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="">Hora Final</label> <b>*</b>
                                        <input type="time" value="{{ old('hora_fin') }}" name="hora_fin" class="form-control" required>
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
                                        <button type="submit" class="btn btn-primary">Registrar Horario</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                    <div class="col-md-9">
                        <div id="consultorio_info">

                        </div>
                    </div>

                </div>
                <!-- /.card-body -->
            </div>
        </div>
    </div>

    <script>
        var todosLosDoctores = @json($doctores);

        // Cargar el calendario al abrir la vista si hay un consultorio seleccionado
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
                    var valorActual = select.val();
                    select.empty();
                    select.append('<option value="">-- Seleccionar Doctor --</option>');

                    // Si no hay doctores en este consultorio, mostrar todos
                    if(doctores.length === 0) {
                        $.each(todosLosDoctores, function(index, doctor) {
                            var selected = doctor.id == valorActual ? 'selected' : '';
                            select.append('<option value="'+doctor.id+'" '+selected+'>'+doctor.nombres+' '+doctor.apellidos+' - '+doctor.especialidad+'</option>');
                        });
                    } else {
                        // Mostrar solo los doctores que tienen horarios en este consultorio
                        $.each(doctores, function(index, doctor) {
                            var selected = doctor.id == valorActual ? 'selected' : '';
                            select.append('<option value="'+doctor.id+'" '+selected+'>'+doctor.nombres+' '+doctor.apellidos+' - '+doctor.especialidad+'</option>');
                        });
                    }
                },
                error: function() {
                    // Si hay error, mostrar todos los doctores
                    var select = $('#doctor_id');
                    select.empty();
                    select.append('<option value="">-- Seleccionar Doctor --</option>');
                    $.each(todosLosDoctores, function(index, doctor) {
                        select.append('<option value="'+doctor.id+'">'+doctor.nombres+' '+doctor.apellidos+' - '+doctor.especialidad+'</option>');
                    });
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


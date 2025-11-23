<div class="table-responsive">
    <table class="table table-striped table-hover table-sm table-bordered" style="font-size: 12px;">
        <thead>
        <tr style="text-align: center">
            <th style="width: 12%; min-width: 80px;">Hora</th>
            <th style="width: 12.5%;">Lunes</th>
            <th style="width: 12.5%;">Martes</th>
            <th style="width: 12.5%;">Miercoles</th>
            <th style="width: 12.5%;">Jueves</th>
            <th style="width: 12.5%;">Viernes</th>
            <th style="width: 12.5%;">Sábado</th>
            <th style="width: 12.5%;">Domingo</th>
        </tr>
        </thead>
        <tbody>
        @php
            $horas = [
                '08:00:00 - 09:00:00', '09:00:00 - 10:00:00',
                '10:00:00 - 11:00:00', '11:00:00 - 12:00:00',
                '12:00:00 - 13:00:00', '13:00:00 - 14:00:00',
                '14:00:00 - 15:00:00', '15:00:00 - 16:00:00',
                '16:00:00 - 17:00:00', '17:00:00 - 18:00:00',
                '18:00:00 - 19:00:00', '19:00:00 - 20:00:00',
            ];
            $diasSemana = ['LUNES', 'MARTES', 'MIERCOLES', 'JUEVES', 'VIERNES', 'SABADO', 'DOMINGO'];
        @endphp
        @foreach($horas as $hora)
            @php
                list($hora_inicio, $hora_fin) = explode(' - ', $hora);
            @endphp
            <tr>
                <td style="text-align: center; font-weight: bold;">{{ $hora }}</td>
                @foreach($diasSemana as $dia)
                    @php
                        $nombre_doctor = "";
                        foreach ($horarios as $horario) {
                            if (strtoupper($horario->dia) == $dia &&
                            $hora_inicio >= $horario->hora_inicio &&
                            $hora_fin <= $horario->hora_fin
                            ) {
                                $nombre_doctor = $horario->doctor->nombres." ".$horario->doctor->apellidos;
                                break;
                            }
                        }
                    @endphp
                    <td style="text-align: center;">{{ $nombre_doctor }}</td>
                @endforeach
            </tr>
        @endforeach
        </tbody>
    </table>
</div>


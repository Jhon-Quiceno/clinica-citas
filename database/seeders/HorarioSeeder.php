<?php

namespace Database\Seeders;

use App\Models\Doctor;
use App\Models\Consultorio;
use App\Models\Horario;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class HorarioSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Obtener todos los doctores y consultorios
        $doctores = Doctor::all();
        $consultorios = Consultorio::where('estado', 'ACTIVO')->get();

        // Días de la semana (lunes a viernes)
        $dias = ['Lunes', 'Martes', 'Miércoles', 'Jueves', 'Viernes'];

        // Horarios de atención
        $horarios_atencion = [
            ['08:00', '09:00'],
            ['09:00', '10:00'],
            ['10:00', '11:00'],
            ['11:00', '12:00'],
            ['14:00', '15:00'],
            ['15:00', '16:00'],
            ['16:00', '17:00'],
        ];

        $contador_doctor = 0;

        // Crear horarios para cada doctor en cada consultorio activo
        foreach ($doctores as $doctor) {
            foreach ($consultorios as $consultorio) {
                // Asignar un horario de atención por día
                foreach ($dias as $dia) {
                    $horario_index = $contador_doctor % count($horarios_atencion);
                    $horario = $horarios_atencion[$horario_index];

                    Horario::create([
                        'dia' => $dia,
                        'hora_inicio' => $horario[0],
                        'hora_fin' => $horario[1],
                        'consultorio_id' => $consultorio->id,
                        'doctor_id' => $doctor->id,
                    ]);
                }

                $contador_doctor++;
            }
        }
    }
}


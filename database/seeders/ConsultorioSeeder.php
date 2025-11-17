<?php

namespace Database\Seeders;

use App\Models\Consultorio;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ConsultorioSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Consultorio::create([
            'nombre' => 'Consultorio 1',
            'ubicacion' => 'Primer piso, oficina 101',
            'capacidad' => '10 personas',
            'telefono' => '3001234567',
            'especialidad' => 'Medicina General',
            'estado' => 'ACTIVO'
        ]);

        Consultorio::create([
            'nombre' => 'Consultorio 2',
            'ubicacion' => 'Segundo piso, oficina 201',
            'capacidad' => '8 personas',
            'telefono' => '3007654321',
            'especialidad' => 'Pediatría',
            'estado' => 'ACTIVO'
        ]);

        Consultorio::create([
            'nombre' => 'Consultorio 3',
            'ubicacion' => 'Tercer piso, oficina 301',
            'capacidad' => '12 personas',
            'telefono' => null,
            'especialidad' => 'Cardiología',
            'estado' => 'INACTIVO'
        ]);
    }
}


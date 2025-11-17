<?php

namespace Database\Seeders;

use App\Models\Doctor;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DoctorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Doctor 1
        $usuario1 = User::create([
            'name' => 'Dr. Carlos Rodríguez',
            'email' => 'carlos.rodriguez@clinica.com',
            'password' => Hash::make('12345678')
        ]);

        Doctor::create([
            'nombres' => 'Carlos',
            'apellidos' => 'Rodríguez',
            'telefono' => '3001234567',
            'licencia_medica' => 'LM-12345',
            'especialidad' => 'Medicina General',
            'user_id' => $usuario1->id
        ]);

        // Doctor 2
        $usuario2 = User::create([
            'name' => 'Dra. María González',
            'email' => 'maria.gonzalez@clinica.com',
            'password' => Hash::make('12345678')
        ]);

        Doctor::create([
            'nombres' => 'María',
            'apellidos' => 'González',
            'telefono' => '3007654321',
            'licencia_medica' => 'LM-67890',
            'especialidad' => 'Pediatría',
            'user_id' => $usuario2->id
        ]);

        // Doctor 3
        $usuario3 = User::create([
            'name' => 'Dr. Juan Pérez',
            'email' => 'juan.perez@clinica.com',
            'password' => Hash::make('12345678')
        ]);

        Doctor::create([
            'nombres' => 'Juan',
            'apellidos' => 'Pérez',
            'telefono' => '3009876543',
            'licencia_medica' => 'LM-11223',
            'especialidad' => 'Cardiología',
            'user_id' => $usuario3->id
        ]);
    }
}


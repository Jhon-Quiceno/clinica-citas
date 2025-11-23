<?php

namespace Database\Seeders;

use App\Models\Secretaria;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // Primero se deben crear los roles y permisos
        $this->call([
            RoleSeeder::class,
        ]);

        // Luego se crean los usuarios con sus roles asignados
        User::create([
            'name' => 'Administrador',
            'email' => 'admin@admin.com',
            'password' => Hash::make('admin123'),
        ])->assignRole('admin');

        User::create([
            'name' => 'Secretaria',
            'email' => 'secretaria@admin.com',
            'password' => Hash::make('admin123'),
        ])->assignRole('secretaria');

        Secretaria::create([
            'nombres' => 'Secretaria',
            'apellidos' => 'Miraflorez',
            'identificacion' => '1234567890',
            'telefono' => '0987654321',
            'fecha_nacimiento' => '10/10/1990',
            'direccion' => 'Calle Falsa 123',
            'user_id' => '2'
        ]);

        User::create([
            'name' => 'Doctor',
            'email' => 'doctor@admin.com',
            'password' => Hash::make('admin123'),
        ])->assignRole('doctor');

        User::create([
            'name' => 'Paciente',
            'email' => 'paciente@admin.com',
            'password' => Hash::make('admin123'),
        ])->assignRole('paciente');

        User::create([
            'name' => 'Usuario',
            'email' => 'usuario@admin.com',
            'password' => Hash::make('admin123'),
        ])->assignRole('usuario');

        // Finalmente se cargan los otros seeders
        $this->call([
            ConsultorioSeeder::class,
            PacienteSeeder::class,
            DoctorSeeder::class,
            HorarioSeeder::class,
        ]);
    }
}

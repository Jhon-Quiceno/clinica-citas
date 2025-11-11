<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Paciente>
 */
class PacienteFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'nombres' => $this->faker->name(),
            'apellidos' => $this->faker->lastName(),
            'identificacion' => $this->faker->unique()->numerify('##########'),
            'eps' => $this->faker->company(),
            'fecha_nacimiento' => $this->faker->date("y-m-d", '2000-01-01'),
            'genero' => $this->faker->randomElement(['Masculino', 'Femenino', 'Otro']),
            'telefono' => $this->faker->phoneNumber(),
            'correo' => $this->faker->unique()->safeEmail(),
            'direccion' => $this->faker->address(),
            'grupo_sanguineo' => $this->faker->randomElement(['A+', 'A-', 'B+', 'B-', 'AB+', 'AB-', 'O+', 'O-']),
            'alergias' => $this->faker->sentence(),
            'contacto_emergencia' => $this->faker->name() . ' - ' . $this->faker->phoneNumber(),
            'observaciones' => $this->faker->optional()->paragraph(),
        ];
    }
}

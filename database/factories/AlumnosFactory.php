<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\User>
 */
class AlumnosFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'nombre' => fake()->name(),
            'primer_apellido' =>fake()->name(),
            'segundo_apellido' =>fake()->name(),
            'grado' => 1,
            'nivel_escolar' => "Primaria",
        ];
    }
}

<?php

namespace Database\Factories;

use App\Models\alumno;
use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Factories\Factory;
use Faker\Generator as Faker;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\alumno>
 */
class AlumnoFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'nombres' =>fake()->name(),
            'apellidos' =>fake()->lastName(),
            'email' =>fake()->unique()->safeEmail(),
            'dni_nie_pasaporte' =>Str::random(9),
            'edad' => fake()->numberBetween(18, 55),
            'genero' =>fake()->randomElement($genero),

        ];
    }
}

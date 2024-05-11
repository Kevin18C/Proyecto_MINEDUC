<?php

namespace Database\Factories;

use App\Models\Tutelar;
use Illuminate\Database\Eloquent\Factories\Factory;

class TutelarFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'nombre_tutelar' => $this->faker->name,
            'id_alumno' => $this->faker->randomElement(range(1,100)),

        ];
    }
}

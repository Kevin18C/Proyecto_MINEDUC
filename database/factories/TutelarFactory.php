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
            'id_alumno' => function () {
                // Puedes utilizar una consulta aquí para obtener un ID de alumno existente
                // Por ejemplo, para obtener un ID aleatorio de un alumno:
                return \App\Models\Alumno::inRandomOrder()->first()->id;
            },
        ];
    }
}

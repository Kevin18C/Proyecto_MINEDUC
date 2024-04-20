<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Catedratico;

class CatedraticoFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'nombre_catedratico'=>$this->faker->name,
            'curso'=>$this->faker->randomElement(['Filosofia', 'Historia', 'Comunicacion y Lenguaje', 'Ciencias Naturales', 'Ciencias Sociales', 'Expresion Artistica']),
            'grado'=>$this->faker->randomElement([8]),
            'seccion'=>$this->faker->randomElement([1,8]),

        ];
    }
}

<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class AlumnoFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'nombre_alumno'=>$this->faker->name,
            'grado_id'=>$this->faker->randomElement(['Filosofia', 'Historia', 'Comunicacion y Lenguaje', 'Ciencias Naturales', 'Ciencias Sociales', 'Expresion Artistica']),
            'id_departamento'=>$this->faker->randomElement(range(1, 22)),
            'id_municipio'=>$this->faker->randomElement(range(1,333)),
        ];
    }
}

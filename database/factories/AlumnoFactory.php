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
            'id_catedratico'=>$this->faker->randomElement(range(1,20)),
            'id_grado'=>$this->faker->randomElement(range(1,9)),
            'id_escuela'=>$this->faker->randomElement(range(1,333)),
            'id_departamento'=>$this->faker->randomElement(range(1, 22)),
            'id_municipio'=>$this->faker->randomElement(range(1,333)),
        ];
    }
}

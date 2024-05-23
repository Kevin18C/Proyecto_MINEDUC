<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class InscripcionFactory extends Factory
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
            'fecha_de_nacimiento'=>$this->faker->dateTimeBetween('2000-01-01','2020-12-31'),
            'telefono'=>$this->faker->numerify('########'),
            'genero'=>$this->faker->randomElement(['Masculino','Femenino']),
            'id_catedratico'=>$this->faker->randomElement(range(1,20)),
            'id_curso' => $this->faker->randomElement(range(1,9)),
            'id_seccion'=>$this->faker->randomElement(range(1,2)),
            'id_grado'=>$this->faker->randomElement(range(1,9)),
            'id_escuela'=>$this->faker->randomElement(range(1,333)),
            'id_municipio'=>$this->faker->randomElement(range(1,333)),
        ];
    }
}

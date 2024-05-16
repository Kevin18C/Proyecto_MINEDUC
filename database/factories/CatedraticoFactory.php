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
            'id_curso'=>$this->faker->randomElement(range(1,9)),
            'id_grado'=>$this->faker->randomElement(range(1,9)),
            'id_seccion'=>$this->faker->randomElement(range(1,2)),

        ];
    }
}

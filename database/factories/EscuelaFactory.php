<?php

namespace Database\Factories;

use App\Models\Escuela;
use App\Models\Municipio;
use Illuminate\Database\Eloquent\Factories\Factory;

class EscuelaFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Escuela::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        // Obtener un municipio aleatorio
        $municipio = Municipio::inRandomOrder()->first();

        return [
            'Escuela' => $this->faker->company,
            'id_municipio' => $municipio->id,
            // Otros atributos de la escuela
        ];
    }
}

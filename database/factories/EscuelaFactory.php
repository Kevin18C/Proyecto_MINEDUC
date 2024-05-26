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

    /**
     * Indicate that the number of schools should be created per municipality.
     *
     * @param  int  $count
     * @return \Illuminate\Database\Eloquent\Factories\Factory
     */
    public function perMunicipality($count = 5)
    {
        return $this->state(function (array $attributes) use ($count) {
            return [
                'id_municipio' => function () {
                    return Municipio::factory()->create()->id;
                },
            ];
        });
    }
}

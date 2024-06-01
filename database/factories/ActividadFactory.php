<?php

namespace Database\Factories;

use App\Models\Curso;
use Illuminate\Database\Eloquent\Factories\Factory;

class ActividadFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
        'Descripcion' => $this-> faker->text,
        'Fechadelaactividad' => $this-> faker->dateTimeBetween($startDate = 'now', $endDate = '+1 month'),
        'Horadelaactividad' => $this-> faker->time(),
        'id_curso' => Curso::inRandomOrder()->first()->id // Asigna una ID de curso aleatoria

        ];
    }
}

<?php

namespace Database\Factories;

use App\Models\Tutelar;
use Illuminate\Database\Eloquent\Factories\Factory;

class TutelarFactory extends Factory
{
    protected $model = Tutelar::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'nombre_tutelar' => $this->faker->name,
            'id_alumno' => null, // Esto se llenará en InscripcionFactory
        ];
    }
}

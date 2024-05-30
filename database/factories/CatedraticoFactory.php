<?php

namespace Database\Factories;

use App\Models\Curso;
use App\Models\Escuela;
use App\Models\Grado;
use App\Models\Seccion;
use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Catedratico;

class CatedraticoFactory extends Factory
{
    protected $model = Catedratico::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'nombre_catedratico' => $this->faker->name,
            'id_escuela' => Escuela::inRandomOrder()->first()->id,
            'id_curso' => Curso::inRandomOrder()->first()->id,
            'id_grado' => Grado::inRandomOrder()->first()->id,
            'id_seccion' => Seccion::inRandomOrder()->first()->id,
        ];
    }

    public function withSpecificDetails($escuelaId, $gradoId, $seccionId)
    {
        return $this->state(function (array $attributes) use ($escuelaId, $gradoId, $seccionId) {
            return [
                'id_escuela' => $escuelaId,
                'id_grado' => $gradoId,
                'id_seccion' => $seccionId,
            ];
        });
    }
}

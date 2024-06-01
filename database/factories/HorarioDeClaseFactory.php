<?php

namespace Database\Factories;

use App\Models\Curso;
use App\Models\Grado;
use Illuminate\Database\Eloquent\Factories\Factory;

class HorarioDeClaseFactory extends Factory
{
    public function definition()
    {
        $dias = ['Lunes', 'Martes', 'Miércoles', 'Jueves', 'Viernes'];
        $hora = $this->faker->numberBetween(7, 12);
        $dia = $this->faker->randomElement($dias);
        $curso = Curso::inRandomOrder()->first();
        $grado = Grado::inRandomOrder()->first();

        return [
            'dia_semana' => $dia,
            'hora_inicio' => sprintf('%02d:00', $hora),
            'hora_fin' => sprintf('%02d:00', $hora + 1),
            'id_curso' => $curso->id,
            'id_grado' => $grado->id,
        ];
    }
}

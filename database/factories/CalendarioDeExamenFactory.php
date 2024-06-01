<?php

namespace Database\Factories;

use App\Models\CalendarioDeExamen;
use App\Models\Curso;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\Factory;

class CalendarioDeExamenFactory extends Factory
{
    protected $model = CalendarioDeExamen::class;

    public function definition()
    {
        $cursos = Curso::pluck('curso')->toArray();
        $curso = $this->faker->randomElement($cursos);
        $year = date('Y');
        $fechaExamen = $this->faker->dateTimeBetween(
            Carbon::create($year, 6, 1), // Primer día de junio
            Carbon::create($year, 6, 7) // Último día de la primera semana de junio
        );

        return [
            'Curso' => $curso,
            'FechaYHoradelExamen' => $fechaExamen,
        ];
    }
}

<?php

namespace Database\Factories;

use App\Models\Curso;
use App\Models\Escuela;
use App\Models\Inscripcion;
use App\Models\Tutelar;
use App\Models\Catedratico;
use Illuminate\Database\Eloquent\Factories\Factory;

class InscripcionFactory extends Factory
{
    protected $model = Inscripcion::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        // Obtener una escuela aleatoria
        $escuela = Escuela::inRandomOrder()->first();

        // Obtener un catedrático aleatorio que pertenezca a la misma escuela
        $catedratico = Catedratico::where('id_escuela', $escuela->id)->inRandomOrder()->first();

        // Verificar que se encontró un catedrático
        if (!$catedratico) {
            // Crear un catedrático si no se encuentra uno
            $catedratico = Catedratico::factory()->create(['id_escuela' => $escuela->id]);
        }

        return [
            'nombre_alumno' => $this->faker->name,
            'fecha_de_nacimiento' => $this->faker->dateTimeBetween('2000-01-01', '2020-12-31'),
            'telefono' => $this->faker->numerify('########'),
            'genero' => $this->faker->randomElement(['Masculino', 'Femenino']),
            'id_catedratico' => $catedratico->id,
            'id_seccion' => $catedratico->id_seccion,
            'id_grado' => $catedratico->id_grado,
            'id_escuela' => $escuela->id,
            'id_municipio' => $escuela->id_municipio,
        ];
    }

    public function configure()
    {
        return $this->afterCreating(function ($inscripcion) {
            $cursos = Curso::all();
            $cursos->each(function ($curso) use ($inscripcion) {
                $inscripcion->cursos()->attach($curso->id);
            });
            Tutelar::factory()->create(['id_alumno' => $inscripcion->id]);
        });
    }
}

<?php

namespace Database\Seeders;

use App\Models\Curso;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CursoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $cursos = [
            ["Matemáticas"],
            ["Comunicación y Lenguaje"],
            ["Ciencias Sociales"],
            ["Ciencias Naturales"],
            ["Inglés"],
            ["Educación Fisica"],
            ["Expresión Artistica"],
            ["Garifuna"],
            ["Computación"]
        ];

        foreach ($cursos as $curso) {
            DB::table('cursos')->insert([
                'curso' => $curso[0],
            ]);
        }
    }
}

<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Alumno;
use App\Models\Grado;

class AlumnoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Obtén todos los grados disponibles
        $grados = Grado::all();

        // Crea 100 alumnos y asigna aleatoriamente un grado a cada uno
        Alumno::factory(100)->create()->each(function ($alumno) use ($grados) {
            $alumno->update(['grado_id' => $grados->random()->id]);
        });
    }
}

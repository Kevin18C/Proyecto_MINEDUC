<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Alumno;
use App\Models\Catedratico;
use App\Models\Tutelar;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // Crea los alumnos y asigna aleatoriamente un grado a cada uno
        $this->call([GradoSeeder::class, AlumnoSeeder::class]);

        // Crea los catedráticos y tutores
        Catedratico::factory(20)->create();
        Tutelar::factory()->count(100)->create();

        // Crea los departamentos y municipios
        $this->call(DepartamentoSeeder::class);
        $this->call(MunicipioSeeder::class);
    }
}

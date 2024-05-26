<?php

namespace Database\Seeders;


use Illuminate\Database\Seeder;
use App\Models\Alumno;
use App\Models\Catedratico;
use App\Models\Tutelar;
use App\Models\Escuela;
use App\Models\Inscripcion;
use App\Models\Municipio;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {



        $this->call(SeccionSeeder::class);
        $this->call(GradoSeeder::class);
        $this->call(DepartamentoSeeder::class);
        $this->call(MunicipioSeeder::class);
        $this->createEscuelasPerMunicipio();
        $this->call(CursoSeeder::class);
        Catedratico::factory(20)->create();
        // Cantidad de estudiantes a crear por escuela
        $estudiantesPorEscuela = 10;

        // Obtén todas las escuelas
        $escuelas = Escuela::all();

        // Para cada escuela, crea estudiantes
        $escuelas->each(function ($escuela) use ($estudiantesPorEscuela) {
            Inscripcion::factory()->count($estudiantesPorEscuela)->create(['id_escuela' => $escuela->id]);
        });


    }

    /**
     * Crea las escuelas por municipio.
     *
     * @return void
     */
    private function createEscuelasPerMunicipio()
    {
        $escuelasPorMunicipio = 5;

        // Obtén todos los municipios
        $municipios = Municipio::all();

        // Crea las escuelas para cada municipio
        foreach ($municipios as $municipio) {
            Escuela::factory()->count($escuelasPorMunicipio)->create([
                'id_municipio' => $municipio->id,
            ]);
        }
    }
}

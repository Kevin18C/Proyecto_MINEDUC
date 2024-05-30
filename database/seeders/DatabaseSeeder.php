<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Catedratico;
use App\Models\Escuela;
use App\Models\Inscripcion;
use App\Models\Municipio;
use App\Models\Grado;
use App\Models\Curso;
use App\Models\Seccion;

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

        // Cantidad de estudiantes adicionales a crear por escuela
        $estudiantesPorEscuela = 10;

        // Obtén todas las escuelas
        $escuelas = Escuela::all();

        // Para cada escuela, crea catedráticos y luego estudiantes
        $escuelas->each(function ($escuela) use ($estudiantesPorEscuela) {
            $this->createCatedraticosPerEscuela($escuela);

            // Crear una inscripción por cada grado
            $this->createInscripcionesPorGrado($escuela);

            // Verificar el número de inscripciones existentes para la escuela
            $inscripcionesExistentes = Inscripcion::where('id_escuela', $escuela->id)->count();

            // Crear inscripciones adicionales para alcanzar la cantidad deseada
            $inscripcionesAdicionales = $estudiantesPorEscuela - $inscripcionesExistentes;
            if ($inscripcionesAdicionales > 0) {
                Inscripcion::factory()->count($inscripcionesAdicionales)->create(['id_escuela' => $escuela->id]);
            }
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

    /**
     * Crea los catedráticos para cada escuela.
     *
     * @return void
     */
    private function createCatedraticosPerEscuela($escuela)
    {
        $grados = Grado::all();
        $secciones = Seccion::all();

        foreach ($grados as $grado) {
            foreach ($secciones as $seccion) {
                // Crear un catedrático para cada grado y sección en la escuela
                Catedratico::factory()->withSpecificDetails($escuela->id, $grado->id, $seccion->id)->create();
            }
        }
    }

    /**
     * Crea al menos una inscripción por cada grado en cada escuela.
     *
     * @return void
     */
    private function createInscripcionesPorGrado($escuela)
{
    $grados = Grado::all();

    foreach ($grados as $grado) {
        // Verificar si hay catedráticos disponibles para este grado en esta escuela
        $catedraticos = Catedratico::where('id_escuela', $escuela->id)
                                    ->where('id_grado', $grado->id)
                                    ->get();

        foreach ($catedraticos as $catedratico) {
            // Crear inscripciones para ambas secciones (A y B) del mismo grado
            Inscripcion::factory()->create([
                'id_escuela' => $escuela->id,
                'id_grado' => $grado->id,
                'id_seccion' => $catedratico->id_seccion,
                'id_catedratico' => $catedratico->id,
                'id_municipio' => $escuela->id_municipio,
            ]);
        }
    }
}
}

<?php


namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Alumno;
use App\Models\Inscripcion;

class AlumnoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Obtener todas las inscripciones
        $inscripciones = Inscripcion::all();

        // Iterar sobre cada inscripción y crear un alumno correspondiente
        foreach ($inscripciones as $inscripcion) {
            Alumno::create([
                'nombre_alumno' => $inscripcion->nombre_alumno,
                'fecha_de_nacimiento' => $inscripcion->fecha_de_nacimiento,
                'telefono' => $inscripcion->telefono,
                'genero' => $inscripcion->genero,
                // Asegúrate de proporcionar valores para otras columnas requeridas aquí
            ]);
        }
    }
}

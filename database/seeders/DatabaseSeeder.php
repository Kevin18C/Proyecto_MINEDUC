<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Alumno;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        $alumno = new Alumno();

        $alumno->nombre_alumno = "Carlos Giovanni Martinez Aldana";
        $alumno->Curso = "Matematicas";

        $alumno->save();

        $alumno2 = new Alumno();

        $alumno2->nombre_alumno = "Pablo";
        $alumno2->Curso = "Matematicas";

        $alumno2->save();

        $alumno3 = new Alumno();

        $alumno3->nombre_alumno = "Luis";
        $alumno3->Curso = "Matematicas";

        $alumno3->save();

        $alumno4 = new Alumno();

        $alumno4->nombre_alumno = "Jose";
        $alumno4->Curso = "Matematicas";

        $alumno4->save();

        $alumno5 = new Alumno();

        $alumno5->nombre_alumno = "Kevin";
        $alumno5->Curso = "Matematicas";

        $alumno5->save();

        $alumno6 = new Alumno();

        $alumno6->nombre_alumno = "Henry";
        $alumno6->Curso = "Matematicas";

        $alumno6->save();



    }
}

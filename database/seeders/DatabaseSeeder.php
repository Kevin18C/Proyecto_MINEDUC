<?php

namespace Database\Seeders;


use Illuminate\Database\Seeder;
use App\Models\Alumno;
use App\Models\Catedratico;
use App\Models\Tutelar;
use App\Models\Escuela;
use App\Models\Inscripcion;

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
        $this->call(CursoSeeder::class);



$cantidadEscuelas = 333; // Puedes ajustar este valor según tus necesidades

// Crea las escuelas con el factory
Escuela::factory()->count($cantidadEscuelas)->create();

        Catedratico::factory(20)->create();



        Inscripcion::factory(100)->create();
               


        Tutelar::factory()->count(100)->create();


    }
}

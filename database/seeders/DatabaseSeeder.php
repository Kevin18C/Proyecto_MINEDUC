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
        Alumno::factory(100)->create();
        Catedratico::factory(20)->create();
        Tutelar::factory()->count(100)->create(); // Crea 100 instancias de Tutelar

        $this->call(GradoSeeder::class);
        $this->call(DepartamentoSeeder::class);
        $this->call(MunicipioSeeder::class);
    }
}

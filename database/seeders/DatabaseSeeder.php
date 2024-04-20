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
        Alumno::factory(100)->create();

        $this->call(DepartamentoSeeder::class);
        $this->call(MunicipioSeeder::class);

    }
}

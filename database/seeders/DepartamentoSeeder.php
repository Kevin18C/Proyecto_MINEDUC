<?php

namespace Database\Seeders;

use App\Models\Departamento;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DepartamentoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('departamentos')->insert([
            'id' => '1',
            'departamento' => 'Izabal',
        ]);

        DB::table('departamentos')->insert([
            'id' => '2',
            'departamento' => 'Baja Verapaz',
        ]);

        DB::table('departamentos')->insert([
            'id' => '3',
            'departamento' => 'El Progreso',
        ]);

        DB::table('departamentos')->insert([
            'id' => '4',
            'departamento' => 'Zacapa',
        ]);

    }
}


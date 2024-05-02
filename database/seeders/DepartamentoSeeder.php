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
        $departamentos = [
            ["Izabal"],
            ["Baja Verapaz"],
            ["El Progreso"],
            ["Zacapa"],
            ["Alta Verapaz"],
            ["Chimaltenango"],
            ["Chiquimula"],
            ["Guatemala"],
            ["Huehuetenango"],
            ["Ichigán"],
            ["Jalapa"],
            ["Jutiapa"],
            ["Petén"],
            ["Quiché"],
            ["Retalhuleu"],
            ["San Marcos"],
            ["Santa Rosa"],
            ["Sololá"],
            ["Suchitepéquez"],
            ["Totonicapán"],
        ];

        foreach ($departamentos as $departamento) {
            DB::table('departamentos')->insert([
                'departamento' => $departamento[0],
            ]);
        }
    }
}


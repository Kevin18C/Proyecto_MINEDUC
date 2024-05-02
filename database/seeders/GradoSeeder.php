<?php

namespace Database\Seeders;

use App\Models\Grado;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class GradoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $grados = [
            ["Parvulos 1"],
            ["Parvulos 2"],
            ["Parvulos 3"],
            ["Primero Primaria"],
            ["Segundo Primaria"],
            ["Tercero Primaria"],
            ["Cuarto Primaria"],
            ["Quinto Primaria"],
            ["Sexto Primaria"]
        ];

        foreach ($grados as $grado) {
            DB::table('grados')->insert([
                'grado' => $grado[0], 
            ]);
        }
    }
}

<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class SeccionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $Seccion = [
            ['A'],
            ['B']
        ];
        foreach ($Seccion as $seccion) {
            DB::table('secciones')->insert([
                'Seccion'=> $seccion[0],
            ]);
        }
    }
}

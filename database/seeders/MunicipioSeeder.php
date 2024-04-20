<?php

namespace Database\Seeders;

use App\Models\Municipio;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class MunicipioSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {  //Izabal
        DB::table('municipios')->insert([
            'id' => '01',
            'municipio' => 'Puerto Barrios',
            'id_departamento'  => '1'
        ]);

        DB::table('municipios')->insert([
            'id' => '02',
            'municipio' => 'El Estor',
            'id_departamento'  => '1'
        ]);

        DB::table('municipios')->insert([
            'id' => '03',
            'municipio' => 'Los Amates',
            'id_departamento'  => '1'
        ]);

        DB::table('municipios')->insert([
            'id' => '04',
            'municipio' => 'Morales',
            'id_departamento'  => '1'
        ]);

        DB::table('municipios')->insert([
            'id' => '05',
            'municipio' => 'Livingston',
            'id_departamento'  => '1'
        ]);

        //Baja Verapaz

        DB::table('municipios')->insert([
            'id' => '06',
            'municipio' => 'Morazan',
            'id_departamento'  => '2'
        ]);

        DB::table('municipios')->insert([
            'id' => '07',
            'municipio' => 'Sanarate',
            'id_departamento'  => '2'
        ]);

        DB::table('municipios')->insert([
            'id' => '08',
            'municipio' => 'San Antonio La Paz',
            'id_departamento'  => '2'
        ]);

        DB::table('municipios')->insert([
            'id' => '09',
            'municipio' => 'El Jicaro',
            'id_departamento'  => '2'
        ]);

        DB::table('municipios')->insert([
            'id' => '10',
            'municipio' => 'Guastatoya',
            'id_departamento'  => '2'
        ]);
        //El estor

        DB::table('municipios')->insert([
            'id' => '11',
            'municipio' => 'Morazan',
            'id_departamento'  => '3'
        ]);

        DB::table('municipios')->insert([
            'id' => '12',
            'municipio' => 'Sanarate',
            'id_departamento'  => '3'
        ]);

        DB::table('municipios')->insert([
            'id' => '13',
            'municipio' => 'San Antonio La Paz',
            'id_departamento'  => '3'
        ]);

        DB::table('municipios')->insert([
            'id' => '14',
            'municipio' => 'El Jicaro',
            'id_departamento'  => '3'
        ]);

        DB::table('municipios')->insert([
            'id' => '15',
            'municipio' => 'Guastatoya',
            'id_departamento'  => '3'
        ]);

        //Zacapa

        DB::table('municipios')->insert([
            'id' => '16',
            'municipio' => 'Morazan',
            'id_departamento'  => '4'
        ]);

        DB::table('municipios')->insert([
            'id' => '17',
            'municipio' => 'Sanarate',
            'id_departamento'  => '4'
        ]);

        DB::table('municipios')->insert([
            'id' => '18',
            'municipio' => 'San Antonio La Paz',
            'id_departamento'  => '4'
        ]);

        DB::table('municipios')->insert([
            'id' => '19',
            'municipio' => 'El Jicaro',
            'id_departamento'  => '4'
        ]);

        DB::table('municipios')->insert([
            'id' => '20',
            'municipio' => 'Guastatoya',
            'id_departamento'  => '4'
        ]);

    }
}

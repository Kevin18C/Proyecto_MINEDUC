<?php

namespace Database\Seeders;

use App\Models\HorarioDeClase;
use Illuminate\Database\Seeder;

class HorarioDeClaseSeeder extends Seeder
{
    public function run()
    {
        HorarioDeClase::factory()->count(150)->create();
    }
}

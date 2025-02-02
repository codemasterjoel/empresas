<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use App\Models\TipoMateriales;

class TipoMaterialesSeeder extends Seeder
{
    public function run(): void
    {
        TipoMateriales::insert([
            ['nombre' => 'Chatarra'],
        ]);
    }
}

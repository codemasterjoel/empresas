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
            ['nombre' => 'PLÁSTICO'],
            ['nombre' => 'ALUMINIO'],
            ['nombre' => 'HIERRO'],
            ['nombre' => 'LATÓN'],
            ['nombre' => 'CALAMINA'],
            ['nombre' => 'PLOMO'],
            ['nombre' => 'COBRE'],
            ['nombre' => 'BRONCE'],
            ['nombre' => 'RCA'],
            ['nombre' => 'BATERÍAS'],
            ['nombre' => 'MOTOR'],
            ['nombre' => 'TARJETA ELECTRÓNICA'],
            ['nombre' => 'PAPEL ARCHIVO'],
            ['nombre' => 'CARTÓN'],
        ]);
    }
}

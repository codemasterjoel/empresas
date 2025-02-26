<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\rols;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Roles
        rols::insert([
            ['id' => 1, 'nombre' =>  'ADMINISTRADOR', 'created_at' => '2022-06-04 23:31:08', 'updated_at' => '2022-06-04 23:31:08'],
            ['id' => 2,  'nombre' =>  'VERIFICAR DOCUMENTOS', 'created_at' => '2022-06-04 23:31:08', 'updated_at' => '2022-06-04 23:31:08'],
            ['id' => 3,  'nombre' =>  'VERIFICAR PAGO', 'created_at' => '2022-06-04 23:31:08', 'updated_at' => '2022-06-04 23:31:08'],
            ['id' => 4,  'nombre' =>  'EMPRESA', 'created_at' => '2022-06-04 23:31:08', 'updated_at' => '2022-06-04 23:31:08'],
        ]);

    }
}

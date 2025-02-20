<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

use App\Models\User;

class DatabaseSeeder extends Seeder
{
    public function run()
    {
        $this->call(RoleSeeder::class);
        $this->call(ParroquiaSeeder::class);
        $this->call(EjeSeeder::class);
        $this->call(BancoSeeder::class);
        $this->call(GeneroSeeder::class);
        $this->call(UserSeeder::class);
        $this->call(TipoMaterialesSeeder::class);
        $this->call(CategoriaSeeder::class);
    }
}

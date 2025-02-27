<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;

// use Spatie\Permission\Models\Role;
// use Spatie\Permission\Models\Permission;
// use Spatie\Permission\Traits\HasRole;

class UserSeeder extends Seeder
{
    public function run(): void
    {
        User::insert([
            ['name' => 'ADMINISTRADOR', 'email' => 'admin@email.com','password' => bcrypt('21246813'), 'rol_id' => '1'],
            ['name' => 'VERIFICADOR DOCUMENTOS', 'email' => 'verificardocumentos@email.com','password' => bcrypt('21246813'), 'rol_id' => '2'],
            ['name' => 'VERIFICADOR PAGOS', 'email' => 'verificarpago@email.com','password' => bcrypt('21246813'), 'rol_id' => '3'],
            ['name' => 'RECYCLER C.A.', 'email' => 'recycler@email.com','password' => bcrypt('21246813'), 'rol_id' => '4'],
        ]);

        // $user = User::Where('email', '=', 'admin@email.com')->get();
        // $user->assignRole('Admin');
    }
}

<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('roles')->insert([
            [
                'codrole' => 'rol001',
                'description' => 'Rol Invitado'                
            ],
            [
                'codrole' => 'rol002',
                'description' => 'Rol Administrador'
            ],
            [
                'codrole' => 'rol003',
                'description' => 'Rol Usuario Autenticado'
            ]
        ]);
    }
}

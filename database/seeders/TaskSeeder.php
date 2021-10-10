<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TaskSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('tasks')->insert([
            [
                'codtask' => 'TS0001',
                'description' => 'Registro de usuarios',
                'role_id' => '1'
            ],
            [
                'codtask' => 'TS0002',
                'description' => 'Gestionar roles',
                'role_id' => '2'
            ],
            [
                'codtask' => 'TS0003',
                'description' => 'Gestionar roles de los usaurios',
                'role_id' => '2'
            ],
            [
                'codtask' => 'TS0004',
                'description' => 'Gestionar endpoints',
                'role_id' => '2'
            ],
            [
                'codtask' => 'TS0005',
                'description' => 'Gestionar endpoints sobre roles',
                'role_id' => '2'
            ],
            [
                'codtask' => 'TS0006',
                'description' => 'Consultar usuarios que no tengan endpoints',
                'role_id' => '2'
            ],
            [
                'codtask' => 'TS0007',
                'description' => 'Gestionar su perfil',
                'role_id' => '3'
            ],
            [
                'codtask' => 'TS0008',
                'description' => 'Ver los endpoints a los que tenga permiso',
                'role_id' => '3'
            ],
            [
                'codtask' => 'TS0009',
                'description' => 'Utilizar los endpoints a los que tenga permiso',
                'role_id' => '3'
            ],
            [
                'codtask' => 'TS0010',
                'description' => 'Cerrar sesion',
                'role_id' => '3'
            ]
        ]);
    }
}

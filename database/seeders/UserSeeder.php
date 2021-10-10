<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            [
                'coduser' => 'US001',
                'name' => 'Hugo Medina',
                'email' => 'hugo_m_r@hotmail.com',
                'password' => 'us001hugo'                
            ],          
            [
                'coduser' => 'US002',
                'name' => 'Maria Jose Medina',
                'email' => 'majo@hotmail.com',
                'password' => 'us002majo'                
            ],
            [
                'coduser' => 'US003',
                'name' => 'Laura Medina',
                'email' => 'malau@hotmail.com',
                'password' => 'us003laur'
            ],
            [
                'coduser' => 'US004',
                'name' => 'Karla Medina',
                'email' => 'karasucia@hotmail.com',
                'password' => 'us004karl'
            ],
            [
                'coduser' => 'US005',
                'name' => 'Alvaro Medina',
                'email' => 'alvaro.medina@hotmail.com',
                'password' => 'us005alva'
            ],
            [
                'coduser' => 'US006',
                'name' => 'Luis Medina',
                'email' => 'luisfernando@hotmail.com',
                'password' => 'us006luis'
            ]
        ]);
    }
}

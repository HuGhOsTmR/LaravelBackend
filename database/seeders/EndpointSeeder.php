<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class EndpointSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('endpoints')->insert([
            [
                'codendpoint' => 'INS001',
                'url' => 'https://api.instagram.com/v1/media/popular',
                'description' => 'Most popular media of Instagram' 
            ],
            [
                'codendpoint' => 'SPO001',
                'url' => 'https://api.spotify.com/v1/albums',
                'description' => 'List of albums most popular in Spotify' 
            ],
            [
                'codendpoint' => 'NBA001',
                'url' => 'https://stats.nba.com/stats/scoreboard',
                'description' => 'Scoreboard of the NBA' 
            ],
            [
                'codendpoint' => 'NBA002',
                'url' => 'https://stats.nba.com/stats/drafthistory',
                'description' => 'History of drafts of the NBA' 
            ]
        ]);
    }
}

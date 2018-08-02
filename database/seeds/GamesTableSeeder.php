<?php

use Illuminate\Database\Seeder;

class GamesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('games')->insert([
            [
                'user_id' => 1,
                'title' => 'First Game'
            ],
            [
                'user_id' => 1,
                'title' => 'Second Game'
            ],
            [
                'user_id' => 1,
                'title' => 'Third Game'
            ],
            [
                'user_id' => 1,
                'title' => 'Fourth Game'
            ]
        ]);
    }
}

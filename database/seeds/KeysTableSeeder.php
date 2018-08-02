<?php

use Illuminate\Database\Seeder;

class KeysTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('keys')->insert([
            [
                'user_id' => 1,
                'game_id' => 1,
                'body' => '12345-12345-12345'
            ],
            [
                'user_id' => 1,
                'game_id' => 1,
                'body' => '23456-23456-23456'
            ],
            [
                'user_id' => 1,
                'game_id' => 1,
                'body' => '34567-34567-34567'
            ],
            [
                'user_id' => 1,
                'game_id' => 2,
                'body' => 'ABCDE-ABCDE-ABCDE'
            ],
            [
                'user_id' => 1,
                'game_id' => 2,
                'body' => 'BCDEF-BCDEF-BCDEF'
            ]
        ]);
    }
}

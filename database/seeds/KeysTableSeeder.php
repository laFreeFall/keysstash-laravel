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
                'game_id' => 1,
                'body' => '12345-12345-12345'
            ],
            [
                'game_id' => 1,
                'body' => '23456-23456-23456'
            ],
            [
                'game_id' => 1,
                'body' => '34567-34567-34567'
            ],
            [
                'game_id' => 2,
                'body' => 'ABCDE-ABCDE-ABCDE'
            ],
            [
                'game_id' => 2,
                'body' => 'BCDEF-BCDEF-BCDEF'
            ]
        ]);
    }
}

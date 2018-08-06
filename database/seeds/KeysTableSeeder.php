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
        $keys = [];
        for($i = 0; $i < 30; $i++) {
            $keys[] = [
                'game_id' => rand(1, 9),
                'body' => rand(10000, 99999) . '-' . rand(10000, 99999) . '-' . rand(10000, 99999)
            ];
        }

        DB::table('keys')->insert($keys);
    }
}

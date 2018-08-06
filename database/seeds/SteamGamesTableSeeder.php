<?php

use Illuminate\Database\Seeder;

class SteamGamesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $url = 'http://api.steampowered.com/ISteamApps/GetAppList/v0002/';
        $data = json_decode(file_get_contents($url), true);
        $addOnlyGames = false; // steam appid % 10
        $perIteration = 5000;
        $amountOfIterations = ceil(count($data) / $perIteration);
        for ($i = 0; $i < $amountOfIterations; $i++) {
            if ($addOnlyGames) {
                DB::table('steam_games')->insert(
                    array_filter(array_slice($data['applist']['apps'], $i * $perIteration, $perIteration), function ($val, $key) {
                        return $val['appid'] % 10 == 0;
                    })
                );
            } else {
                DB::table('steam_games')->insert(array_slice($data['applist']['apps'], $i * $perIteration, $perIteration));
            }

        }
    }
}

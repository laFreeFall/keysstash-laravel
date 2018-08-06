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
                'steam_game_id' => 292030,
                'steam' => true,
                'deleted' => false,
                'title' => 'The Witcher® 3: Wild Hunt',
                'link' => 'http://store.steampowered.com/app/292030/The_Witcher_3_Wild_Hunt/',
                'image' => 'https://steamcdn-a.akamaihd.net/steam/apps/292030/header.jpg',
                'user_id' => 1
            ],
            [
                'steam_game_id' => 400,
                'steam' => true,
                'deleted' => false,
                'title' => 'Portal',
                'link' => 'http://store.steampowered.com/app/400/Portal/',
                'image' => 'https://steamcdn-a.akamaihd.net/steam/apps/400/header.jpg',
                'user_id' => 1
            ],
            [
                'steam_game_id' => 620,
                'steam' => true,
                'deleted' => false,
                'title' => 'Portal 2',
                'link' => 'http://store.steampowered.com/app/620/Portal_2/',
                'image' => 'https://steamcdn-a.akamaihd.net/steam/apps/620/header.jpg',
                'user_id' => 1
            ],
            [
                'steam_game_id' => 413150,
                'steam' => true,
                'deleted' => false,
                'title' => 'Stardew Valley',
                'link' => 'http://store.steampowered.com/app/413150/Stardew_Valley/',
                'image' => 'https://steamcdn-a.akamaihd.net/steam/apps/413150/header.jpg',
                'user_id' => 1
            ],
            [
                'steam_game_id' => 8980,
                'steam' => true,
                'deleted' => false,
                'title' => 'Borderlands',
                'link' => 'http://store.steampowered.com/app/8980/Borderlands/',
                'image' => 'https://steamcdn-a.akamaihd.net/steam/apps/8980/header.jpg',
                'user_id' => 1
            ],
            [
                'steam_game_id' => 49520,
                'steam' => true,
                'deleted' => false,
                'title' => 'Borderlands 2',
                'link' => 'http://store.steampowered.com/app/49520/Borderlands_2/',
                'image' => 'https://steamcdn-a.akamaihd.net/steam/apps/49520/header.jpg',
                'user_id' => 1
            ],
            [
                'steam_game_id' => 40800,
                'steam' => true,
                'deleted' => false,
                'title' => 'Super Meat Boy',
                'link' => 'http://store.steampowered.com/app/40800/Super_Meat_Boy/',
                'image' => 'https://steamcdn-a.akamaihd.net/steam/apps/40800/header.jpg',
                'user_id' => 1
            ],
            [
                'steam_game_id' => 250900,
                'steam' => true,
                'deleted' => false,
                'title' => 'The Binding of Isaac: Rebirth',
                'link' => 'http://store.steampowered.com/app/250900/The_Binding_of_Isaac_Rebirth/',
                'image' => 'https://steamcdn-a.akamaihd.net/steam/apps/250900/header.jpg',
                'user_id' => 1
            ],
            [
                'steam_game_id' => 113200,
                'steam' => true,
                'deleted' => false,
                'title' => 'The Binding of Isaac',
                'link' => 'http://store.steampowered.com/app/113200/The_Binding_of_Isaac/',
                'image' => 'https://steamcdn-a.akamaihd.net/steam/apps/113200/header.jpg',
                'user_id' => 1
            ]
        ]);
    }
}

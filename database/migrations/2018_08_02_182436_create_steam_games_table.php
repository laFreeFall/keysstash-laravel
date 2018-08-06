<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSteamGamesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('steam_games', function (Blueprint $table) {
            $table->integer('appid')->unique();
            $table->primary('appid');
            $table->string('name');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
//        Uncomment line below if you want to drop your table
//        It's commented for now because it's resource-consuming task to fetch all the games from Steam every migration
        Schema::dropIfExists('steam_games');
    }
}

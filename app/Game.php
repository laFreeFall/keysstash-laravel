<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Game extends Model
{
    /**
     * Get the keys for the game.
     */
    public function keys()
    {
        return $this->hasMany(Key::class);
    }
}

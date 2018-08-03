<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Key extends Model
{
    /**
     * Get the game key belongs to.
     */
    public function game()
    {
        return $this->belongsTo(Game::class);
    }
}

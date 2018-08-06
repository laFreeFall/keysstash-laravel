<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Game extends Model
{
    /**
     * The attributes that aren't mass assignable.
     *
     * @var array
     */
    protected $guarded = [];

    /**
     * Get the keys for the game.
     */
    public function keys()
    {
        return $this->hasMany(Key::class);
    }
}

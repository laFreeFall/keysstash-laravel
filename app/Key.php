<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Key extends Model
{
    /**
     * The attributes that aren't mass assignable.
     *
     * @var array
     */
    protected $guarded = [];

    /**
     * Get the game key belongs to.
     */
    public function game()
    {
        return $this->belongsTo(Game::class);
    }
}

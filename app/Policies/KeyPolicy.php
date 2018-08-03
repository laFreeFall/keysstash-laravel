<?php

namespace App\Policies;

use App\Game;
use App\User;
use App\Key;
use Illuminate\Auth\Access\HandlesAuthorization;

class KeyPolicy
{
    use HandlesAuthorization;

    /**
     * Determine whether the user can create keys.
     *
     * @param  \App\User  $user
     * @param  \App\Game  $game
     * @return bool
     */
    public function create(User $user, Game $game)
    {
        return $user->id === $game->user_id;
    }

    /**
     * Determine whether the user can update the key.
     *
     * @param  \App\User  $user
     * @param  \App\Key  $key
     * @return bool
     */
    public function update(User $user, Key $key)
    {
        return $user->id === $key->game->user_id;
    }
}

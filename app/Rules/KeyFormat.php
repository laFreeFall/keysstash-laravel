<?php

namespace App\Rules;

use App\Game;
use Illuminate\Contracts\Validation\Rule;

class KeyFormat implements Rule
{
    protected $gameId;

    /**
     * Create a new rule instance.
     *
     * @return void
     */
    public function __construct($gameId)
    {
        $this->gameId = $gameId;
    }

    /**
     * Determine if the validation rule passes.
     *
     * @param  string  $attribute
     * @param  mixed  $value
     * @return bool
     */
    public function passes($attribute, $value)
    {
        if(Game::find($this->gameId)->steam_id) {
            return preg_match('[A-Z\d]{5}-[A-Z\d]{5}-[A-Z\d]{5}', $value);
        } else {
            return strlen($value) > 4;
        }
    }

    /**
     * Get the validation error message.
     *
     * @return string
     */
    public function message()
    {
        return 'Key should be in appropriate format.';
    }
}

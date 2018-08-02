<?php

namespace App\Http\Controllers\Api;

use App\Game;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Http\Response;

class GameController extends Controller
{
    /**
     * Returns list of all games with nested keys.
     *
     * @return Response
     */
    public function index()
    {
        $games = Game::with('keys')
            ->withCount('keys')
            ->orderBy('keys_count', 'asc')
            ->get();

        return response()->json(compact('games'));
    }
}

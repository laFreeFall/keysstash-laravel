<?php

namespace App\Http\Controllers\Api;

use App\Http\Requests\StoreGameRequest;
use App\SteamGame;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Http\Response;

class GameController extends Controller
{
    /**
     * Returns list of all games with nested keys.
     *
     * @param  Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $games = $request->user()->games()
            ->with('keys')
            ->withCount('keys')
            ->orderBy('keys_count', 'asc')
            ->get();

        return response()->json(compact('games'));
    }

    public function search(Request $request)
    {
        if($request->q) {
            $games = SteamGame::where('name', 'like', "%$request->q%")->get();
            return response()->json(compact('games'));
        }
        return response()->json([]);
    }

    public function store(StoreGameRequest $request)
    {
        $game = $request->user()
            ->games()
            ->create($request->validated());

        return response()->json(compact('game'));
    }
}

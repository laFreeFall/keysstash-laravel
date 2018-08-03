<?php

namespace App\Http\Controllers\Api;

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
}

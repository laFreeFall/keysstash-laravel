<?php

namespace App\Http\Controllers\Api;

use App\Game;
use App\Http\Requests\StoreKeyRequest;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Http\Response;

class KeyController extends Controller
{
    /**
     * Store used status for a key.
     *
     * @param  StoreKeyRequest  $request
     * @param  Game  $game
     * @return Response
     * @throws \Illuminate\Auth\Access\AuthorizationException
     */
    public function store(StoreKeyRequest $request, Game $game)
    {
//        $this->authorize('create', $game);

        $key = $game->keys()->create($request->validated());

        return response()->json(compact('key'));
    }
}

<?php

namespace App\Http\Controllers\Api;

use App\Key;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Http\Response;

class KeyUseController extends Controller
{
    /**
     * Store used status for a key.
     *
     * @param  Request  $request
     * @param  Key  $key
     * @return Response
     * @throws \Illuminate\Auth\Access\AuthorizationException
     */
    public function store(Request $request, Key $key)
    {
        $this->authorize('update', $key);

        $key->used = true;
        $key->save();

        return response()->json([
            'value' => $key->used
        ]);
    }

    /**
     * Destroys used status from a key.
     *
     * @param  Request  $request
     * @param  Key  $key
     * @return Response
     * @throws \Illuminate\Auth\Access\AuthorizationException
     */
    public function destroy(Request $request, Key $key)
    {
        $this->authorize('update', $key);

        $key->used = false;
        $key->save();

        return response()->json([
            'value' => $key->used
        ]);
    }
}

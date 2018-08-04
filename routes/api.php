<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/
Auth::routes();

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
Route::get('users/store', 'Auth\RegisterController@register');

Route::middleware(['auth:api'])->group(function() {
    Route::get('games', 'Api\GameController@index')->name('games.index');
    Route::post('keys/{key}/use', 'Api\KeyUseController@store')->name('keys.use.store');
    Route::delete('keys/{key}/use', 'Api\KeyUseController@destroy')->name('keys.use.destroy');
    Route::post('games/{game}/keys', 'Api\KeyController@store')->name('keys.store');
});

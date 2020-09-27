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

/**
 * Routes for Movies
 */
Route::group(['middleware' => []], function () {

    Route::group(['prefix' => 'movies'], function() {

        Route::get('/', 'MovieController@index');

        Route::get('/create', 'MovieController@create');

        Route::post('/store', 'MovieController@store');

        Route::get('/{movie}', 'MovieController@show');

        Route::get('/{movie}/edit', 'MovieController@edit');

        Route::patch('/{movie}/edit', 'MovieController@update');

        Route::get('/{id}/delete', 'MovieController@delete');

        Route::delete('/{id}/destroy', 'MovieController@destroy');

    });

});

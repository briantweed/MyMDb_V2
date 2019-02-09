<?php

/**
 * Routes for Movies
 */
Route::group(['middleware' => []], function () {

    Route::group(['prefix' => 'movies'], function() {

        Route::get('/', 'MovieController@index')->name('movies.index');

        Route::get('/{movie}', 'MovieController@show')->name('movies.show');

        Route::get('/create', 'MovieController@create')->name('movies.create');

        Route::post('/store', 'MovieController@store')->name('movies.store');

        Route::get('/{id}/edit', 'MovieController@edit')->name('movies.edit');

        Route::patch('/{id}/edit', 'MovieController@update')->name('movies.update');

        Route::get('/{id}/delete', 'MovieController@delete')->name('movies.delete');

        Route::delete('/{id}/destroy', 'MovieController@destroy')->name('movies.destroy');

    });

});



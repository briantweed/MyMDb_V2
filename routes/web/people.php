<?php

/**
 * Routes for People
 */
Route::group(['middleware' => []], function () {

    Route::group(['prefix' => 'people'], function() {

        Route::get('/', 'PersonController@index')->name('people.index');

        Route::get('/{person}', 'PersonController@show')->name('people.show');

        Route::get('/create', 'PersonController@create')->name('people.create');

        Route::post('/store', 'PersonController@store')->name('people.store');

        Route::get('/{id}/edit', 'PersonController@edit')->name('people.edit');

        Route::patch('/{id}/edit', 'PersonController@update')->name('people.update');

        Route::get('/{id}/delete', 'PersonController@delete')->name('people.delete');

        Route::delete('/{id}/destroy', 'PersonController@destroy')->name('people.destroy');

    });

});



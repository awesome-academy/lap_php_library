<?php

Auth::routes();

Route::namespace('Client')->group(function () {
    Route::get('/', 'HomeController@index')->name('home');
});

Route::group(['middleware' => 'auth'], function () {
    Route::group(['prefix' => 'admin'], function () {
        Route::resources([
            'book' => 'Admin\BookController'
        ]);
    });
});

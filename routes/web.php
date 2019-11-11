<?php

Auth::routes();

Route::namespace('Client')->group(function () {
    Route::get('/', 'HomeController@index')->name('home');
});

<?php

use Illuminate\Support\Facades\Route;

Route::prefix('customer')->as('customer.')->group(function () {
    Route::get('/home', [
        'as' => 'home',
        'uses' => 'App\Http\Controllers\WebControllers\IndexController@getHome'
    ]);
});

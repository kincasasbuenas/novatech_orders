<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;
//use App\Http\Controllers\PostController;

Route::controller(PageController::class)->group(function () {     

    Route::get('/',                'home')->name('home');
    Route::get('/orders',          'orders')->name('orders');

});
<?php

use Illuminate\Support\Facades\Route;

Route::view('/','home')->name('home.index');

Route::view('/profile','profile')->name('profile.index');
Route::view('/portfolios','portfolios')->name('portfolios.index');

Route::get('/test', function () {

});

require __DIR__.'/auth.php';

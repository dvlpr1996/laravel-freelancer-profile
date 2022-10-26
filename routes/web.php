<?php

use Illuminate\Support\Facades\Route;

Route::view('/','home')->name('home.index');

Route::view('/a','panel.profile')->name('profile.index');

Route::get('/test', function () {

});

require __DIR__.'/auth.php';

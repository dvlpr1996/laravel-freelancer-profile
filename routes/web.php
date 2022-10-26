<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PanelController;

Route::view('/', 'home')->name('home.index');

Route::middleware(['auth'])->group(function () {
	Route::controller(PanelController::class)->group(function () {
		Route::Get('/panel-profile/{user:slug}', 'index')
			->where('user', '[A-Za-z-]+')
			->name('panel.index');
	});
});


Route::GET('/test', function () {
});

require __DIR__ . '/auth.php';

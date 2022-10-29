<?php

use App\Models\WorkSample;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\PanelController;
use App\Http\Controllers\PortfolioController;

Route::view('/', 'home')->name('home.index');

Route::middleware(['auth'])->group(function () {
	Route::controller(PanelController::class)->group(function () {
		Route::Get('/panel-profile/{user:slug}', 'index')
			->where('user', '[A-Za-z-]+')
			->name('panel.profile.index');
	});

	Route::controller(PortfolioController::class)->group(function () {
		Route::Get('/panel-portfolios/{user:slug}', 'index')
			->where('user', '[A-Za-z-]+')
			->name('panel.portfolios.index');
	});

	Route::controller(UserController::class)->group(function () {
		Route::Get('/delete/{user:slug}', 'destroy')
			->where('user', '[A-Za-z-]+')
			->name('delete.destroy');
	});
});


Route::GET('/test', function () {

});

require __DIR__ . '/auth.php';

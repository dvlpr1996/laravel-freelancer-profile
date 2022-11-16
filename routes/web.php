<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CvController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\PanelController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ContactUsController;
use App\Http\Controllers\PortfolioController;
use App\Http\Controllers\WorkSampleController;
use App\Http\Controllers\NotificationController;

Route::view('/', 'home')->name('home.index');

Route::middleware(['auth'])->group(function () {
	Route::controller(PanelController::class)->group(function () {
		Route::Get('/panel-profile/{user:slug}', 'index')
			->where('user', '[A-Za-z-]+')
			->name('panel.profile.index');
	});

	Route::controller(NotificationController::class)->group(function () {
		Route::Get('/panel-message/{user:slug}', 'index')
			->where('user', '[A-Za-z-]+')
			->name('panel.notification.index');

		Route::Get('/panel-message/{contact}/delete', 'destroy')
			->where('contact', '[0-9]+')
			->name('panel.notification.destroy');
	});

	Route::controller(PortfolioController::class)->group(function () {
		Route::Get('/panel-portfolios/{user:slug}', 'index')
			->where('user', '[A-Za-z-]+')
			->name('panel.portfolios.index');
	});

	Route::controller(UserController::class)->group(function () {
		Route::Get('user/{user:slug}/delete', 'destroy')
			->where('user', '[A-Za-z-]+')
			->middleware('password.confirm')
			->name('delete.destroy');

		Route::put('user/update/{user:slug}', 'update')
			->where('user', '[A-Za-z-]+')
			->name('user.update');
	});

	Route::controller(CvController::class)->group(function () {
		Route::POST('cv/update/{user:slug}', 'update')
			->where('user', '[A-Za-z-]+')
			->name('cv.update');

		Route::get('cv/{user:slug}/delete', 'destroy')
			->where('user', '[A-Za-z-]+')
			->name('cv.destroy');

		Route::get('cv/{user:slug}/download', 'download')
			->where('user', '[A-Za-z-]+')
			->name('cv.download');
	});
});

Route::controller(ProfileController::class)->group(function () {
	Route::Get('/profile/{user:slug}', 'index')
		->where('user', '[A-Za-z-]+')
		->name('profile.index');
});

Route::controller(WorkSampleController::class)->group(function () {
	Route::Get('/workSamples/{workSample}', 'index')
		->where('workSample', '[0-9A-Za-z-]+')
		->name('ws.index');
});

Route::controller(ContactUsController::class)->group(function () {
	Route::POST('/contact-to/{user:slug}', 'store')
		->where('user', '[A-Za-z-]+')
		->name('contact.store');
});


Route::GET('/test', function () {
});

require __DIR__ . '/auth.php';

<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\LoginRequest;
use App\Providers\RouteServiceProvider;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthenticatedSessionController extends Controller
{
	public function store(LoginRequest $request)
	{
		$request->authenticate();

		$request->session()->regenerate();

		return redirect()->intended(RouteServiceProvider::HOME . auth()->user()->slug);
	}

	public function destroy(Request $request)
	{
		Auth::guard('web')->logout();

		$request->session()->invalidate();

		$request->session()->regenerateToken();

		return redirect()->route('home.index')->withToastSuccess(__('app.logout'));
	}
}

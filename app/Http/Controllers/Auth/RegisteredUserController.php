<?php

namespace App\Http\Controllers\Auth;

use App\Models\User;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Validation\Rules;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Auth\Events\Registered;
use App\Providers\RouteServiceProvider;

class RegisteredUserController extends Controller
{
	public function store(Request $request)
	{
		$request->validate([
			'fname' => ['required', 'string', 'max:255'],
			'lname' => ['required', 'string', 'max:255'],
			'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
			'password' => ['required', 'min:8', 'confirmed', Rules\Password::defaults()],
		]);

		$user = User::create([
			'fname' => $request->fname,
			'lname' => $request->lname,
			'email' => $request->email,
			'slug' => Str::slug($request->fname . ' ' . $request->lname),
			'password' => Hash::make($request->password),
		]);

		event(new Registered($user));

		Auth::login($user);

		return redirect(RouteServiceProvider::HOME . auth()->user()->slug);
	}
}

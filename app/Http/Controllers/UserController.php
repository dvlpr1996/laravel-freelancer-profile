<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
	public function destroy(User $user)
	{
		User::findOrFail($user->id)->delete();
		Auth::guard('web')->logout();
		return redirect()->route('home.index');
	}
}

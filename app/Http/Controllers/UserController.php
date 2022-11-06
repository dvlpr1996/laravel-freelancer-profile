<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Http\Requests\UserRequest;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
	public function destroy(User $user)
	{
		User::findOrFail($user->id)->delete();

		Auth::guard('web')->logout();
		
		return redirect()->route('home.index');
	}

	public function update(UserRequest $request, User $user)
	{
		$user->update([
			'fname' => $request->fname,
			'lname' => $request->lname,
			'tel' => $request->tel,
			'date_of_birth' => $request->date_of_birth,
			'slug' => Str::slug($request->slug),
			'email' => $request->email,
			'address' => $request->address,
			'bio' => $request->bio
		]);

		User::findOrFail($user->id)->skills()->update([
			'name' => $request->skill,
		]);

		return back();
	}
}

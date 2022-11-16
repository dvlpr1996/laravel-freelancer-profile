<?php

namespace App\Http\Controllers\Auth;

use App\Models\User;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use App\Providers\RouteServiceProvider;
use App\Http\Requests\UpdatePasswordRequest;

class ChangePasswordController extends Controller
{
	public function updatePassword(UpdatePasswordRequest $request, User $user)
	{
		// $this->authorize('update', $user);
		if (!Hash::check($request->oldPassword, $user->password))
			return back()->with('toast_error', __('app.passwordNotMatch'));

		if (Hash::check($request->newPassword, $user->password))
			return back()->with('toast_error', __('app.samePassword'));

		User::whereId($user->id)->update([
			'password' => Hash::make($request->newPassword)
		]);

		return redirect()->intended(RouteServiceProvider::HOME . auth()->user()->slug)
			->withToastSuccess(__('app.passwordChanged'));
	}
}

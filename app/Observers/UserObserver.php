<?php

namespace App\Observers;

use App\Models\User;

class UserObserver
{
	public function created(User $user)
	{
		User::find($user->id)->skills()->create([
			'name' => 'undefined',
		]);
	}

	public function deleting(User $user)
	{
		User::find($user->id)->skills()->delete();
	}
}

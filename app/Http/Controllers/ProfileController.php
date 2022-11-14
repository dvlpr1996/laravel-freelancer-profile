<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\WorkSample;
use Illuminate\Http\Request;

class ProfileController extends Controller
{
	public function index(User $user)
	{
		$userWorkSamples = WorkSample::where('user_id', $user->id)->paginate(8);
		return view('profile', compact('user','userWorkSamples'));
	}
}

<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class WorkSampleController extends Controller
{
	public function index(User $user)
	{
		return view('portfolios',compact('user'));
	}
}

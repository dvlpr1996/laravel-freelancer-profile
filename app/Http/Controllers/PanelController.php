<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class PanelController extends Controller
{
	public function index(User $user)
	{
		return view('panel.profile',compact('user'));
	}
}

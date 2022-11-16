<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;

class HomeController extends Controller
{
	public function index()
	{
		$users = User::select('slug', 'email')->get();
		return View('home', compact('users'));
	}
}

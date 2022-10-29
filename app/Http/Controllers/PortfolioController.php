<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\WorkSample;
use Illuminate\Http\Request;

class PortfolioController extends Controller
{
	public function index(User $user)
	{
		$portfolios = WorkSample::authUser()->paginate(10);
		return view('panel.portfolios', compact('user', 'portfolios'));
	}
}

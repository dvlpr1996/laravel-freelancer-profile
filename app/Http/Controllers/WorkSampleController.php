<?php

namespace App\Http\Controllers;

use App\Models\WorkSample;
use Illuminate\Http\Request;

class WorkSampleController extends Controller
{
	public function index(WorkSample $workSample)
	{
		$relatedWorkSample = WorkSample::where('user_id', $workSample->user_id)->get();
		return view('portfolios', compact('workSample', 'relatedWorkSample'));
	}
}

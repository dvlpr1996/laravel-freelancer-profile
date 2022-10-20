<?php

namespace App\View\Components\auth;

use Illuminate\View\Component;

class label extends Component
{
	public $class;
	public function __construct($class='')
	{
		$this->class= $class;
	}

	public function render()
	{
		return view('components.auth.label');
	}
}

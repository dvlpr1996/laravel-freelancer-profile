<?php

namespace App\View\Components\auth;

use Illuminate\View\Component;

class input extends Component
{
	public $name;
	public $type;
	public $old;

	public function __construct($name, $type, $old)
	{
		$this->name = $name;
		$this->type = $type;
		$this->old = $old;
	}

	public function render()
	{
		return view('components.auth.input');
	}
}

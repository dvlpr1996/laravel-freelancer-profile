<?php

namespace App\View\Components\auth;

use Illuminate\View\Component;

class input extends Component
{
	public $name;
	public $type;
	public $old;
	public $place;

	public function __construct($name, $type, $old='' , $place='')
	{
		$this->name = $name;
		$this->type = $type;
		$this->old = $old;
		$this->place = $place;
	}

	public function render()
	{
		return view('components.auth.input');
	}
}

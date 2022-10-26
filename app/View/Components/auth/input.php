<?php

namespace App\View\Components\auth;

use Illuminate\View\Component;

class input extends Component
{
	public $name;
	public $type;
	public $old;
	public $place;
	public $value;

	public function __construct($name, $type, $old = '', $place = '', $value = '')
	{
		$this->name = $name;
		$this->type = $type;
		$this->old = $old;
		$this->place = $place;
		$this->value = $value;
	}

	public function render()
	{
		return view('components.auth.input');
	}
}

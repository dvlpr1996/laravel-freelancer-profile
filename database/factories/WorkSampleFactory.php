<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

class WorkSampleFactory extends Factory
{
	public function definition()
	{
		return [
			'user_id' => User::first() ?? User::factory(),
			'title' => fake()->words(5, true),
			'des' => fake()->realText(),
			'ws_path' => 'https://loremflickr.com/'
				. mt_rand(0, 500) . '/' . mt_rand(0, 500) .
				'/world?random=' . fake()->randomNumber()
		];
	}
}

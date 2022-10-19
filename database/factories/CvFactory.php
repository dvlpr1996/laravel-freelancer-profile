<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

class CvFactory extends Factory
{
	public function definition()
	{
		return [
			'user_id' => User::first() ?? User::factory(),
			'title' => fake()->words(5, true),
			'cv_path' => fake()->slug(5) . '.pdf',
		];
	}
}

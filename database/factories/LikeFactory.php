<?php

namespace Database\Factories;

use App\Models\WorkSample;
use Illuminate\Database\Eloquent\Factories\Factory;

class LikeFactory extends Factory
{
	public function definition()
	{
		return [
			'work_samples_id' => WorkSample::first() ?? WorkSample::factory(),
			'like' => mt_rand(1, 50),
		];
	}
}

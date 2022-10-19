<?php

namespace Database\Factories;

use App\Models\User;
use App\Models\WorkSample;
use Illuminate\Database\Eloquent\Factories\Factory;

class SkillFactory extends Factory
{
	public function definition()
	{
		$skillable = $this->skillable();
		return [
			'name' => fake()->words(mt_rand(1, 3), true),
			'skillable_type' => $skillable,
			'skillable_id' => $skillable::factory(),
		];
	}

	private function skillable()
	{
		return $this->faker->randomElement([
			User::class,
			WorkSample::class
		]);
	}
}

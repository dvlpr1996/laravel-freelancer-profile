<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

class ContactFactory extends Factory
{
	public function definition()
	{
		return [
			'user_id' => User::first() ?? User::factory(),
			'fname' => fake()->firstName(),
			'lname' => fake()->lastName(),
			'email' => fake()->unique()->safeEmail(),
			'tel' => str_replace(['+', '-', '.', ')', '(', ' '], '', fake()->phoneNumber()),
			'msg' => fake()->realText(),
		];
	}
}

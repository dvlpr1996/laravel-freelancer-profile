<?php

namespace Database\Factories;

use Illuminate\Support\Str;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Eloquent\Factories\Factory;

class UserFactory extends Factory
{
	public function definition()
	{
		return [
			'fname' => fake()->firstName(),
			'lname' => fake()->lastName(),
			'slug' => fake()->firstName() . '-' . fake()->lastName(),
			'tel' => str_replace(['+', '-', '.', ')', '(', ' '], '', fake()->phoneNumber()),
			'address' => fake()->city() . ' ' . fake()->streetName(),
			'bio' => fake()->realText(),
			'date_of_birth' => fake()->date(),
			'email' => fake()->unique()->safeEmail(),
			'email_verified_at' => now(),
			'password' => Hash::make('123456789'),
			'remember_token' => Str::random(10),
		];
	}

	public function unverified()
	{
		return $this->state(fn (array $attributes) => [
			'email_verified_at' => null,
		]);
	}
}

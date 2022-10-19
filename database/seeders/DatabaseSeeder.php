<?php

namespace Database\Seeders;

use Database\Seeders\CvSeeder;
use Illuminate\Database\Seeder;
use Database\Seeders\LikeSeeder;
use Database\Seeders\UserSeeder;
use Database\Seeders\SkillSeeder;
use Database\Seeders\ContactSeeder;
use Database\Seeders\WorkSampleSeeder;

class DatabaseSeeder extends Seeder
{
	public function run()
	{
		$this->call([
			UserSeeder::class,
			ContactSeeder::class,
			CvSeeder::class,
			LikeSeeder::class,
			SkillSeeder::class,
			WorkSampleSeeder::class,
		]);
	}
}

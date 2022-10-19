<?php

namespace Database\Seeders;

use App\Models\WorkSample;
use Illuminate\Database\Seeder;

class WorkSampleSeeder extends Seeder
{
	public function run()
	{
		WorkSample::factory()->count(5)->create();
	}
}

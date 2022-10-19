<?php

namespace Database\Seeders;

use App\Models\Cv;
use Illuminate\Database\Seeder;

class CvSeeder extends Seeder
{
	public function run()
	{
		Cv::factory()->count(1)->create();
	}
}

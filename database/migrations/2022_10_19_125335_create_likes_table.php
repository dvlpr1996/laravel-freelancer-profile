<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
	public function up()
	{
		Schema::create('likes', function (Blueprint $table) {
			$table->bigIncrements('id');
			$table->foreignId('work_samples_id')
				->constrained('work_samples')
				->onUpdate('cascade')
				->onDelete('cascade');
			$table->tinyInteger('like')->default(0);
			$table->timestamps();
		});
	}

	public function down()
	{
		Schema::dropIfExists('likes');
	}
};

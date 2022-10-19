<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
	public function up()
	{
		Schema::create('work_samples', function (Blueprint $table) {
			$table->id();
			$table->foreignId('user_id')
				->constrained('users')
				->onUpdate('cascade')
				->onDelete('cascade');
			$table->string('title', 512);
			$table->text('des', 512)->nullable();
			$table->string('ws_path')->unique();
			$table->timestamps();
		});
	}

	public function down()
	{
		Schema::dropIfExists('work_samples');
	}
};

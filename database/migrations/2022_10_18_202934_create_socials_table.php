<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
	public function up()
	{
		Schema::create('socials', function (Blueprint $table) {
			$table->id();
			$table->foreignId('user_id')
				->constrained('users')
				->onUpdate('cascade')
				->onDelete('cascade');
			$table->enum(
				'type',
				[
					'twitter',
					'github',
					'telegram',
					'instagram'
				]
			)->default(null)->nullable();
			$table->string('link')->nullable()->unique();
			$table->enum(
				'icon',
				[
					'fa-brands fa-twitter',
					'fa-brands fa-github',
					'fa-brands fa-telegram',
					'fa-brands fa-instagram'
				]
			)->default(null)->nullable();
			$table->timestamps();
		});
	}

	public function down()
	{
		Schema::dropIfExists('socials');
	}
};

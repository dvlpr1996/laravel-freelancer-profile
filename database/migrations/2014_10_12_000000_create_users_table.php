<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
	public function up()
	{
		Schema::create('users', function (Blueprint $table) {
			$table->id();
			$table->string('fname', 16);
			$table->string('lname', 32);
			$table->string('email')->unique();
			$table->string('slug')->unique()->nullable();
			$table->string('tel',11)->unique()->nullable();
			$table->string('address', 512)->nullable();
			$table->text('bio', 1024)->nullable();
			$table->date('date_of_birth')->nullable();
			$table->timestamp('email_verified_at')->nullable();
			$table->string('password');
			$table->rememberToken();
			$table->timestamps();
		});
	}

	public function down()
	{
		Schema::dropIfExists('users');
	}
};

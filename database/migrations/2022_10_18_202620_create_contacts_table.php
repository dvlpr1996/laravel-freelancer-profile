<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
	public function up()
	{
		Schema::create('contacts', function (Blueprint $table) {
			$table->id();
			$table->foreignId('user_id')
				->constrained('users')
				->onUpdate('cascade')
				->onDelete('cascade');
			$table->string('fname', 16);
			$table->string('lname', 32);
			$table->string('email');
			$table->string('tel', 11);
			$table->text('msg');
			$table->timestamps();
		});
	}

	public function down()
	{
		Schema::dropIfExists('contact_u_s');
	}
};

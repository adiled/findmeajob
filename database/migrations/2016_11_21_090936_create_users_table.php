<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateUsersTable extends Migration {

	public function up()
	{
		Schema::create('users', function(Blueprint $table) {
			$table->increments('id');
			$table->timestamps();
			$table->string('full_name');
			$table->string('email');
			$table->string('password');
			$table->string('phone')->nullable();
			$table->integer('role')->unsigned();
			$table->mediumInteger('reward_points')->default('0');
			$table->boolean('active')->default(false);
			$table->rememberToken();
		});
	}

	public function down()
	{
		Schema::drop('users');
	}
}
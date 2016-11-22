<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateUserRolesTable extends Migration {

	public function up()
	{
		Schema::create('user_roles', function(Blueprint $table) {
			$table->increments('id');
			$table->timestamps();
			$table->string('name');
			$table->string('display_name')->nullable();
		});
	}

	public function down()
	{
		Schema::drop('user_roles');
	}
}
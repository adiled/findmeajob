<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateFeedbackTable extends Migration {

	public function up()
	{
		Schema::create('feedback', function(Blueprint $table) {
			$table->increments('id');
			$table->timestamps();
			$table->string('name');
			$table->string('email');
			$table->string('phone')->nullable();
			$table->string('content');
		});
	}

	public function down()
	{
		Schema::drop('feedback');
	}
}
<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateListingsTable extends Migration {

	public function up()
	{
		Schema::create('listings', function(Blueprint $table) {
			$table->increments('id');
			$table->timestamps();
			$table->string('job_title');
			$table->string('description');
			$table->time('work_hour_start');
			$table->time('work_hour_end');
			$table->timestamp('last_activated_at')->nullable();
			$table->integer('user_id')->unsigned();
		});
	}

	public function down()
	{
		Schema::drop('listings');
	}
}
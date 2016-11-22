<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateJobApplicationsTable extends Migration {

	public function up()
	{
		Schema::create('job_applications', function(Blueprint $table) {
			$table->increments('id');
			$table->timestamps();
			$table->integer('user_id')->unsigned();
		});
	}

	public function down()
	{
		Schema::drop('job_applications');
	}
}
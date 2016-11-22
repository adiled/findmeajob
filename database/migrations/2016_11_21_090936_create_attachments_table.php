<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateAttachmentsTable extends Migration {

	public function up()
	{
		Schema::create('attachments', function(Blueprint $table) {
			$table->increments('id');
			$table->timestamps();
			$table->integer('user_id')->unsigned()->nullable();
			$table->string('filename');
			$table->integer('attachable_id')->unsigned();
			$table->string('attachable_type');
		});
	}

	public function down()
	{
		Schema::drop('attachments');
	}
}
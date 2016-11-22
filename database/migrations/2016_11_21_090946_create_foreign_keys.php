<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Eloquent\Model;

class CreateForeignKeys extends Migration {

	public function up()
	{
		Schema::table('users', function(Blueprint $table) {
			$table->foreign('role')->references('id')->on('user_roles')
						->onDelete('restrict')
						->onUpdate('restrict');
		});
		Schema::table('attachments', function(Blueprint $table) {
			$table->foreign('user_id')->references('id')->on('users')
						->onDelete('restrict')
						->onUpdate('restrict');
		});
		Schema::table('job_applications', function(Blueprint $table) {
			$table->foreign('user_id')->references('id')->on('users')
						->onDelete('restrict')
						->onUpdate('restrict');
		});
	}

	public function down()
	{
		Schema::table('users', function(Blueprint $table) {
			$table->dropForeign('users_role_foreign');
		});
		Schema::table('attachments', function(Blueprint $table) {
			$table->dropForeign('attachments_user_id_foreign');
		});
		Schema::table('job_applications', function(Blueprint $table) {
			$table->dropForeign('job_applications_user_id_foreign');
		});
	}
}
<?php

use Illuminate\Database\Seeder;
use App\Models\UserRole;

class UserRoleTableSeeder extends Seeder {

	public function run()
	{
		//DB::table('user_roles')->delete();

		// Admin
		UserRole::create(array(
				'name' => 'admin',
				'display_name' => 'Administrator'
			));

		// Employer
		UserRole::create(array(
				'name' => 'employer',
				'display_name' => 'Employer'
			));

		// Individual
		UserRole::create(array(
				'name' => 'individual',
				'display_name' => 'Individual'
			));
	}
}
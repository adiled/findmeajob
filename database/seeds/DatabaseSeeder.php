<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class DatabaseSeeder extends Seeder {

	public function run()
	{
		Model::unguard();

		$this->call('UserRoleTableSeeder');
		$this->command->info('UserRole table seeded!');
	}
}
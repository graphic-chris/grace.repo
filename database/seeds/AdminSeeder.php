<?php
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

class AdminSeeder extends Seeder {

	public function run()
	{
		DB::table('users')->truncate(); // Using truncate function so all info will be cleared when re-seeding.
		DB::table('roles')->truncate();
		DB::table('role_users')->truncate();
		DB::table('activations')->truncate();

		$superadmin = Sentinel::registerAndActivate(array(
			'email'       => 'phillip@graceframe.com',
			'password'    => bcrypt('mad15696'),
			'first_name'  => 'phillip',
			'last_name'   => 'madsen',
		));
		$superAdminRole = Sentinel::getRoleRepository()->createModel()->create([
			'name' => 'Super Admin',
			'slug' => 'superadmin',
			'permissions' => array('superadmin' => 1),
		]);
		$this->command->info('Super Admin role created');

		$superadmin->roles()->attach($superAdminRole);

		$this->command->info('Admin User created for phillip');





		$brien = Sentinel::registerAndActivate(array(
			'email'       => 'brien@graceframe.com',
			'password'    => bcrypt('grace'),
			'first_name'  => 'Brien',
			'last_name'   => 'Arnold',
		));

		$chris = Sentinel::registerAndActivate(array(
			'email'       => 'chris@graceframe.com',
			'password'    => bcrypt('grace'),
			'first_name'  => 'Chris',
			'last_name'   => 'S',
		));



		$adminRole = Sentinel::getRoleRepository()->createModel()->create([
			'name' => 'Admin',
			'slug' => 'admin',
			'permissions' => array('admin' => 2),
		]);
		$this->command->info('Admin role created');

		$brien->roles()->attach($adminRole);
		$chris->roles()->attach($adminRole);

		$this->command->info('Admin User created for chris and brien');












		$customerRole = Sentinel::getRoleRepository()->createModel()->create([
			'name' => 'Customer',
			'slug' => 'customer',
			'permissions' => array('admin' => 5),
		]);
		$this->command->info('Customer role created');

		Sentinel::getRoleRepository()->createModel()->create([
			'name'  => 'User',
			'slug'  => 'user',
		]);
		$this->command->info('Admin User created with username admin@admin.com and password admin');


	}

}
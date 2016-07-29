<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class SectionsTableSeeder extends Seeder
{
	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		\DB::statement('SET FOREIGN_KEY_CHECKS = 0');
		\DB::table('sections')->truncate();
		\DB::statement('SET FOREIGN_KEY_CHECKS = 1');

		\DB::table('sections')->insert([
			[
				'name' => 'The Grace Company',
				'slug' => Str::slug('the-grace-company'),
				'lang' => 'en'],
			[
				'name' => 'Hand Quilting',
				'slug' => Str::slug('hand-quilting'),
				'lang' => 'en'],

			[
				'name' => 'Machine Quilting ',
				'slug' => Str::slug('machine-quilting'),
				'lang' => 'en'],
			[
				'name' => 'Quilting Hoop',
				'slug' => Str::slug('quilting-hoop'),
				'lang' => 'en'],
			[
				'name' => 'Lap Hoops',
				'slug' => Str::slug('lap-hoops'),
				'lang' => 'en'],
			[
				'name' => 'Hand Quilting Frames',
				'slug' => Str::slug('hand-quilting-frames'),
				'lang' => 'en'],
			[
				'name' => 'Machine Quilting Frames',
				'slug' => Str::slug('machine-quilting-frames'),
				'lang' => 'en'],
			[
				'name' => 'Qnique',
				'slug' => Str::slug('qnique'),
				'lang' => 'en'],
			[
				'name' => 'Quilting Accessories',
				'slug' => Str::slug('quilting-accessories'),
				'lang' => 'en'],
			[
				'name' => 'Machine Frame Accessories',
				'slug' => Str::slug('machine-frame-accessories'),
				'lang' => 'en'],
			[
				'name' => 'Hand Frame Accessories',
				'slug' => Str::slug('hand-frame-accessories'),
				'lang' => 'en'],
			[
				'name' => 'Hoop Accessories',
				'slug' => Str::slug('hoop-accessories'),
				'lang' => 'en']
		]);
	}
}

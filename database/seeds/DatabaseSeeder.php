<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Artisan;

class DatabaseSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		Model::unguard();

		$this->call('CertificatesTableSeeder');
		$this->call('FormatsTableSeeder');
		$this->call('GenresTableSeeder');
		$this->call('TagsTableSeeder');
		$this->call('PeopleTableSeeder');
		$this->call('StudiosTableSeeder');
		$this->call('MoviesTableSeeder');

		$this->call('CastTableSeeder');
		$this->call('GenreMovieTableSeeder');
		$this->call('CrewTableSeeder');
		$this->call('MovieTagsTableSeeder');

		$this->call('QuotesTableSeeder');

		Model::reguard();

        Artisan::call('slug:movies');
        Artisan::call('slug:people');
	    $this->call(MoviesTableSeeder::class);
    }

}

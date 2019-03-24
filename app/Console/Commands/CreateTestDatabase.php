<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\Artisan;

use App\Models\{Cast, Crew, Movie, Person};


class CreateTestDatabase extends Command
{

    protected $signature = 'migrate:test';

    protected $description = 'Create a test database';

    protected $generateNewData = true;


    public function __construct()
    {
        parent::__construct();
    }


    public function handle()
    {
        Artisan::call('migrate:reset --database=mysql_tests');

        Artisan::call('migrate --database=mysql_tests');

        $this->applySeed('CertificatesTableSeeder');

        $this->applySeed('FormatsTableSeeder');

        $this->applySeed('GenresTableSeeder');

        $this->applySeed('TagsTableSeeder');

        $this->applySeed('StudiosTableSeeder');

        if($this->generateNewData)
        {
            factory(Movie::class, 10)->create();
            Artisan::call('iseed movies --database=mysql_tests --classnameprefix=Fake --force');

            factory(Person::class, 10)->create();
            Artisan::call('iseed people --database=mysql_tests --classnameprefix=Fake --force');

            $movies = Movie::all();
            foreach($movies as $movie)
            {
                factory(Cast::class, random_int(3, 10))->create([
                    'movie_id' => $movie->id
                ]);

                factory(Crew::class, random_int(1, 3))->create([
                    'movie_id' => $movie->id
                ]);
            }
            Artisan::call('iseed cast --database=mysql_tests --classnameprefix=Fake --force');
            Artisan::call('iseed crew --database=mysql_tests --classnameprefix=Fake --force');
        }
        else
        {
            $this->applySeed('FakeMoviesTableSeeder');
            $this->applySeed('FakePeopleTableSeeder');
            $this->applySeed('FakeCastTableSeeder');
            $this->applySeed('FakeCrewTableSeeder');
        }

        $this->info('Test database migration and seeding complete.');
    }


    private function applySeed($seed)
    {
        Artisan::call('db:seed',[
            '--database' => 'mysql_tests',
            '--class' => $seed,
        ]);
    }

}

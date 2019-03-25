<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Artisan;

use App\Models\{Cast, Crew, Movie, Person};


class CreateTestDatabase extends Command
{

    protected const TABLE_PREFIX = 'Fake';

    protected $signature = 'setup:testing {{--new : Generate new test data}}';
    protected $description = 'Create and seed a test database';
    protected $generateNewData = false;


    public function __construct()
    {
        parent::__construct();
    }


    public function handle()
    {
        $this->generateNewData = $this->option('new') ?: false;
        $this->createDatabase();
        $this->refreshMigration();
        $this->applyDefaultSeeds();
        $this->applyFakeSeeds();
        $this->info('Test database migration and seeding complete.');
    }


    private function createDatabase()
    {
        DB::statement("CREATE DATABASE IF NOT EXISTS ". env('DB_TEST_DATABASE'));
        $this->info("CREATE DATABASE IF NOT EXISTS ". env('DB_TEST_DATABASE'));
    }


    private function refreshMigration()
    {
        Artisan::call('migrate:reset --database=mysql_tests');
        Artisan::call('migrate --database=mysql_tests');
    }


    private function applyDefaultSeeds()
    {
        $this->applySeed('CertificatesTableSeeder');
        $this->applySeed('FormatsTableSeeder');
        $this->applySeed('GenresTableSeeder');
        $this->applySeed('TagsTableSeeder');
        $this->applySeed('StudiosTableSeeder');
        $this->applySeed('QuotesTableSeeder');
    }


    private function applySeed($seed)
    {
        Artisan::call('db:seed',[
            '--database' => 'mysql_tests',
            '--class' => $seed,
        ]);
    }


    private function applyFakeSeeds()
    {
        if($this->generateNewData)
        {
            factory(Movie::class, 10)->create();
            Artisan::call('iseed movies --database=mysql_tests --classnameprefix=' . self::TABLE_PREFIX . ' --force');

            factory(Person::class, 10)->create();
            Artisan::call('iseed people --database=mysql_tests --classnameprefix=' . self::TABLE_PREFIX . ' --force');

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
            Artisan::call('iseed cast --database=mysql_tests --classnameprefix=' . self::TABLE_PREFIX . ' --force');
            Artisan::call('iseed crew --database=mysql_tests --classnameprefix=' . self::TABLE_PREFIX . ' --force');
        }
        else
        {
            $this->applySeed('FakeMoviesTableSeeder');
            $this->applySeed('FakePeopleTableSeeder');
            $this->applySeed('FakeCastTableSeeder');
            $this->applySeed('FakeCrewTableSeeder');
        }
    }

}

<?php

namespace App\Console\Commands;

use App\Models\Movie;
use App\Models\Person;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\Artisan;


class CreateTestDatabase extends Command
{

    protected $signature = 'migrate:test';

    protected $description = 'Create a test database';

    protected $generateNewData = false;


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
        }
        else
        {
            $this->applySeed('FakeMoviesTableSeeder');
            $this->applySeed('FakePeopleTableSeeder');
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

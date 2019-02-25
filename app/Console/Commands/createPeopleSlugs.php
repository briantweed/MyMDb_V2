<?php

namespace App\Console\Commands;

use App\Models\Person;
use Illuminate\Console\Command;
use Illuminate\Support\Str;

class createPeopleSlugs extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'slug:people';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Create a URL slug for each person from their full name';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
        $this->info('Creating: people slugs');
        $people = Person::all();
        foreach($people as $person) {
            $person->slug = Str::slug($person->fullname);
            $person->update();
        }
        $this->info('Created: movie slugs');
    }
}

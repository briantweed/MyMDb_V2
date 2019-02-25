<?php

namespace App\Console\Commands;

use App\Models\Movie;
use Illuminate\Console\Command;
use Illuminate\Support\Str;

class createMovieSlugs extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'slug:movies';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Create a URL slug for each movie from its title';

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
        $this->info('Creating: movie slugs');
        $movies = Movie::all();
        foreach($movies as $movie) {
            $movie->slug = Str::slug($movie->name);
            $movie->update();
        }
        $this->info('Created: movie slugs');
    }
}

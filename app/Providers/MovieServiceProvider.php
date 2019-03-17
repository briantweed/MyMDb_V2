<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

use App\Models\Movie;
use App\Builders\{FormBuilder};
use App\Forms\{MovieFilterForm, MovieForm};


class MovieServiceProvider extends ServiceProvider
{

    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {

    }


    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        $this->movieFilters();
        $this->letterGroups();
        $this->movieForm();
    }


    /**
     * Build and display the movie filter form either when the partial is included.
     *
     * @see resources/pages/movies/partials/movie_filter
     * @uses FormBuilder::build(), MovieFilterForm
     * @return void
     */
    private function movieFilters(): void
    {
        view()->composer('pages.movies.partials.movie_filter', function ($view) {
            $view->with([
                'filters' => (new FormBuilder(new MovieFilterForm(), request()->request->all()))->build()
            ]);
        });
    }

    
    /**
     * Group by the first letter of their title; all numeric titles are grouped under 0-9.
     * Display the letter groups either when the partial is included.
     *
     * @see resources/pages/movies/partials/movie_letters
     * @uses Movie::groupByFirstLetter()
     * @return void
     */
    private function letterGroups(): void
    {
        view()->composer('pages.movies.partials.movie_letters', function ($view) {
            $view->with([
                'letters' => Movie::groupByFirstLetter(),
                'characters' => array_merge(['0-9'], range('A', 'Z'))
            ]);
        });
    }


    /**
     * Build and display the movie form either when the partial is included.
     *
     * @see resources/pages/movies/partials/movie_form
     * @uses FormBuilder::build(), MovieForm
     * @return void
     */
    private function movieForm()
    {
        view()->composer('pages.movies.partials.movie_form', function ($view) {
            $attributes = $view->movie ? $view->movie->getAttributes() : null;
            $view->with([
                'form' => (new FormBuilder(new MovieForm(), $attributes))->build()
            ]);
        });
    }

}

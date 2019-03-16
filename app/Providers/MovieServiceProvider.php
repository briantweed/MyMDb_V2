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
        //
    }


    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        $this->displayMovieFilters();
        $this->displayGroupedByLetterFilter();
        $this->displayMovieForm();
    }


    /**
     * Build the Movie Filter Form and display it when the movie_filter partial is included in the view.
     *
     * @see resources/pages/movies/partials/movie_filter
     * @uses FormBuilder::build(), MovieFilterForm
     * @return void
     */
    private function displayMovieFilters(): void
    {
        view()->composer('pages.movies.partials.movie_filter', function ($view) {
            $view->with([
                'filters' => (new FormBuilder(new MovieFilterForm()))->build()
            ]);
        });
    }

    /**
     * Group all movies by the first letter of their title; all numeric titles are grouped under 0-9.
     * Display when the movie_letters partial is included in the view.
     *
     * @see resources/pages/movies/partials/movie_letters
     * @uses Movie::groupByFirstLetter()
     * @return void
     */
    private function displayGroupedByLetterFilter(): void
    {
        view()->composer('pages.movies.partials.movie_letters', function ($view) {
            $view->with([
                'letters' => Movie::groupByFirstLetter()
            ]);
        });
    }


    /**
     * Build the Movie Form and display it when the movie_form partial is included in the view.
     *
     * @see resources/pages/movies/partials/movie_form
     * @uses FormBuilder::build(), MovieForm
     * @return void
     */
    private function displayMovieForm()
    {
        view()->composer('pages.movies.partials.movie_form', function ($view) {
            $attributes = $view->movie ? $view->movie->getAttributes() : null;
            $view->with([
                'form' => (new FormBuilder(new MovieForm(), $attributes))->build()
            ]);
        });
    }

}

<?php

namespace App\ViewComposers;

use App\Models\Movie;
use App\Models\Quote;
use Illuminate\Support\ServiceProvider;

class ErrorViewController extends ServiceProvider
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
        view()->composer('errors::*', function ($view) {
            $view->with([
                'quote' => Quote::with('movie')->inRandomOrder()->first(),
            ]);
        });

    }
}

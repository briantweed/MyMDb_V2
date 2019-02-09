<?php

namespace App\Providers;

use Illuminate\Support\Facades\Blade;
use Illuminate\Support\ServiceProvider;


class ComponentServiceProvider extends ServiceProvider
{

    public function boot()
    {
        Blade::component('layouts.components.h2', 'h2');

        Blade::component('layouts.components.row', 'row');
    }

}
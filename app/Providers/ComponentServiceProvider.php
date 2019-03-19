<?php

namespace App\Providers;

use Illuminate\Support\Facades\Blade;
use Illuminate\Support\ServiceProvider;


class ComponentServiceProvider extends ServiceProvider
{

    public function boot()
    {
        Blade::component('layouts.components.row', 'row');

        Blade::component('forms.components.form-group', 'formgroup');
    }

}
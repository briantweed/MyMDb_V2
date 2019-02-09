<?php

namespace App\Providers;

use Illuminate\Routing\Router;
use Symfony\Component\Finder\Finder;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use Illuminate\Foundation\Support\Providers\RouteServiceProvider as ServiceProvider;


class RouteServiceProvider extends ServiceProvider
{

    protected $namespace = 'App\Http\Controllers';

    protected $folder = 'routes/web';


    public function boot()
    {
        parent::boot();
    }


    public function map(Router $router)
    {
        $this->mapWebRoutes($router);

        $this->mapApiRoutes();
    }


    protected function mapWebRoutes(Router $router)
    {
        $router->group($this->getDefaultGroup(), function () {
            // $this->requireAuthRoutes();
            $this->requireWebRoutes();
            // $this->requireDefaultRoutes();
        });
    }


    protected function getDefaultGroup()
    {
        return [
            'namespace' => $this->namespace,
            'middleware' => 'web'
        ];
    }


    protected function requireAuthRoutes()
    {
        Route::get('/', function () {
            if(Auth::user()) {
                return redirect('dashboard');
            }
            else {
                return view('auth.login');
            }
        });
        Auth::routes();
    }


    protected function requireWebRoutes()
    {
        $files = Finder::create()->in(base_path($this->folder))->name('*.php');
        $this->require($files);
    }


    protected function require($files)
    {
        foreach($files as $file) {
            require $file->getRealPath();
        }
    }


    protected function requireDefaultRoutes()
    {
        Route::any('{query}', function() { return redirect('/');})->where('query', '.*');
    }


    protected function mapApiRoutes()
    {
        Route::prefix('api')
            ->middleware('api')
            ->namespace($this->namespace)
            ->group(base_path('routes/api.php'));
    }

}
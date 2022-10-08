<?php

namespace App\Providers;

use Illuminate\Cache\RateLimiting\Limit;
use Illuminate\Foundation\Support\Providers\RouteServiceProvider as ServiceProvider;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\RateLimiter;
use Illuminate\Support\Facades\Route;

class RouteServiceProvider extends ServiceProvider
{
    public const HOME = '/customer/home';

    // protected $namespace = 'App\\Http\\Controllers';

    public function boot()
    {
        $this->configureRateLimiting();

        $this->routes(function () {
            $this->apiRoutes();

            $this->webRoutes();
        });
    }

    protected function configureRateLimiting()
    {
        RateLimiter::for('api', function (Request $request) {
            return Limit::perMinute(60)->by(optional($request->user())->id ?: $request->ip());
        });
    }

    // Routes Function
    public function webRoutes()
    {
        Route::middleware('web')
            ->namespace($this->namespace)
            ->group(base_path('routes/web.php'));

        // Web routes.
        $files = File::files(base_path('routes/web'));
        foreach ($files as $file) {
            Route::middleware(['web'])
                ->namespace($this->namespace)
                ->group($file->getPathname());
        }
    }

    public function apiRoutes()
    {
        Route::prefix('api')
            ->middleware('api')
            ->namespace($this->namespace)
            ->group(base_path('routes/api.php'));

        // API routes.
        $files = File::files(base_path('routes/api'));
        foreach ($files as $file) {
            Route::middleware(['api'])
                ->namespace($this->namespace)
                ->group($file->getPathname());
        }
    }
}

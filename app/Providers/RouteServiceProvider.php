<?php

namespace App\Providers;

use Illuminate\Support\Facades\Route;
use Illuminate\Foundation\Support\Providers\RouteServiceProvider as ServiceProvider;

class RouteServiceProvider extends ServiceProvider
{
    /**
     * This namespace is applied to your controller routes.
     *
     * In addition, it is set as the URL generator's root namespace.
     *
     * @var string
     */
    protected $namespace = 'App\Http\Controllers';
    protected $backendNamespace = 'App\Http\Controllers\Admin';
    protected $frontendNamespace = 'App\Http\Controllers\Home';

    /**
     * Define your route model bindings, pattern filters, etc.
     *
     * @return void
     */
    public function boot()
    {
        parent::boot();
    }

    /**
     * Define the routes for the application.
     *
     * @return void
     */
    public function map()
    {
        $this->mapApiRoutes();

        $this->mapWebRoutes();

    }

    /**
     * Define the "web" routes for the application.
     *
     * These routes all receive session state, CSRF protection, etc.
     *
     * @return void
     */
    protected function mapWebRoutes()
    {

        $url_prefix = explode('.',$_SERVER['HTTP_HOST'])[0];

        $backendUrl = config('route.admin_url');
        $frontendUrl = config('route.home_url');

        if($url_prefix=='h'){
            Route::middleware('web')
                ->namespace($this->namespace)
                ->group(base_path('routes/web.php'));
        }else if($url_prefix=='admin'){
            Route::middleware('web')
                ->namespace($this->namespace)
                ->group(base_path('Http/route_admin.php'));

//            Route::group([
//                    'domain' => $backendUrl,
//                    'namespace' => $this->backendNamespace],
//                    function ($router) {
//                        require app_path('Http/route_admin.php');
//                    }
//                );

        }

    }

    /**
     * Define the "api" routes for the application.
     *
     * These routes are typically stateless.
     *
     * @return void
     */
    protected function mapApiRoutes()
    {
        Route::prefix('api')
             ->middleware('api')
             ->namespace($this->namespace)
             ->group(base_path('routes/api.php'));
    }
}

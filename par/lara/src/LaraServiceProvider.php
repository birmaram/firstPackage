<?php

namespace par\lara;

use Illuminate\Support\ServiceProvider;

class LaraServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        //
        //  $this->loadViewsFrom(__DIR__.'/NewPackage/par/laravel-pack', 'par/laravel-pack');
        //  $this->publishes([__DIR__.'/NewPackage/par/laravel-pack' => base_path('NewPackage/par/laravel-pack'),]);

        //  if (! $this->app->routesAreCached()) {
        require __DIR__.'/Http/route/routes.php';
        //  }
        //  $this->publishes([
       //__DIR__.'/path/to/translations' => resource_path('lang/vendor/NewPackage'),

    // ]);
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {

      $this->app->bind('lara',function($app){
        return new lara;
      });

    }
}

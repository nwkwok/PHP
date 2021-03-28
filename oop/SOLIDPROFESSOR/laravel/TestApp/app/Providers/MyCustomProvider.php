<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class MyCustomProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
      $this->app->singleton('my-custom-logic', function () {
        $baseNumber = 123;
    
        return new \App\MyCustomLogic($baseNumber);
      });
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}

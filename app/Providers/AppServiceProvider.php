<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\Config;
class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //If local databse set
        if(Config::get('app.env') !='production'){
               Schema::defaultStringLength(191);
        }
    }

    /**ss
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}

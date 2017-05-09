<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
         // mendaftarkan contact 
        $this->app->when('App\Http\Controllers\VisitorsController')
            ->needs('App\Domain\Contracts\VisitorsInterface')
            ->give('App\Domain\Repositories\VisitorsRepository');

         $this->app->when('App\Http\Controllers\LogController')
            ->needs('App\Domain\Contracts\LogInterface')
            ->give('App\Domain\Repositories\LogRepository');
            
         $this->app->when('App\Http\Controllers\UsersController')
            ->needs('App\Domain\Contracts\UsersInterface')
            ->give('App\Domain\Repositories\UsersRepository');

    }
}

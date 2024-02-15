<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Laravel\Sanctum\Sanctum;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Session;


class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        Sanctum::ignoreMigrations();
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
       
        Route::resourceVerbs([
            'technology'=>'technologie',
            'crew' => 'equipage',
            'moon'=>'lune',
        ]);
        // App::setLocale(Session::get('locale'));
        //  dd(Session::get('locale'));
    }
}

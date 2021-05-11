<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Region;
use App\User;
use App\Email;
use App\Country;
use App\Observers\RegionObserver;
use App\Observers\SendEmailSubscribtion;
use Illuminate\Support\Facades\View;
use Illuminate\Support\Facades\File;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        View::composer('layouts.menu', function ($view) {
            $directory = base_path('resources/lang/');
            $languages = File::directories($directory);
            $view->with('languages', array_map('basename', $languages));
        });
        Region::observe(RegionObserver::class);

        view()->composer('layouts.footer', function ($view) {
            $view->with('email',\App\Email::count());
        });

        Email::observe(SendEmailSubscribtion::class);

        view()->composer('admin.region.index', function($view){
            $view->with('country',\App\Country::count());
        });

        view()->composer('admin.district.index', function($view){
            $view->with('region',\App\Region::count());
        });

        View::composer('admin.layouts.body', function ($view) {
            $directory = base_path('resources/lang/');
            $languages = File::directories($directory);
            $view->with('languages', array_map('basename', $languages));
        });

       

    }
}

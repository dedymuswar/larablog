<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Schema;

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
        view()->composer('partial._topNavbar', function ($view) {

            $view->with('user', \App\User::dataUser());
        });

        view()->composer('web.layout.sidebar', function ($view) {
            $view->with('popular', \App\PostView::PopularView());
        });

        Schema::defaultStringLength(191);
    }
}

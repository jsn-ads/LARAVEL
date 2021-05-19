<?php

namespace App\Providers;

use App\Models\Page;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\View;


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

        $frontMenu = [];

        $pages = Page::all();
        foreach($pages as $page){
            $frontMenu[ $page['slug']] = $page['title'];
        }

        view()->share('front_menu', $frontMenu);

    }
}

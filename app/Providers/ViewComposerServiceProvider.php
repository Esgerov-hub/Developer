<?php

namespace App\Providers;



use App\Http\Composers\NavigationComposers;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;

class ViewComposerServiceProvider extends ServiceProvider
{

    public function register()
    {
        //
    }


    public function boot()
    {
        View::composer('pages.app',NavigationComposers::class);
    }
}

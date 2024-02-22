<?php

namespace App\Providers;

use App\Supports\ShopifyRoute;
use Illuminate\Routing\UrlGenerator;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        UrlGenerator::macro('shopifyRoute', new ShopifyRoute());
    }
}

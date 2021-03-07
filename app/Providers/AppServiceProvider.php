<?php

namespace App\Providers;

use Illuminate\Pagination\Paginator;
use Illuminate\Support\ServiceProvider;
use App\Models\EngineerType;
use Illuminate\View\View;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        Paginator::useBootstrap();

        $categories = EngineerType::all();
        view()->share('categories', $categories);
    }

    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }
}

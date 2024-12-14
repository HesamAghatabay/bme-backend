<?php

namespace App\Providers;

use App\Models\category;
use App\Models\comment;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\Facades\View;
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
        View::composer('*', function ($view) {
            $view->with('categories', category::all());
        });
        Gate::define('comment', function (comment $comment) {
            return $comment->activity == 1;
        });
    }
}

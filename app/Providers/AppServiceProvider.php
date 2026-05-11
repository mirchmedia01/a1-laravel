<?php

namespace App\Providers;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    public function register(): void
    {
        if (env('MONGODB_URI') && extension_loaded('mongodb')) {
            $this->app->register(\MongoDB\Laravel\MongoDBServiceProvider::class);
        }
    }

    public function boot(): void
    {
        if (! env('MONGODB_URI') || ! extension_loaded('mongodb')) {
            config(['database.default' => 'sqlite']);
        }
    }
}

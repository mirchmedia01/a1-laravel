<?php

namespace App\Providers;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    public function register(): void
    {
        if (env('MONGODB_URI')) {
            try {
                $this->app->register(\MongoDB\Laravel\MongoDBServiceProvider::class);
            } catch (\Throwable $e) {
                // MongoDB driver or extension not available
            }
        }
    }

    public function boot(): void
    {
        if (! env('MONGODB_URI')) {
            config(['database.default' => 'sqlite']);
        }

        try {
            DB::connection('mongodb')->getMongoClient()->listDatabases();
        } catch (\Throwable $e) {
            config(['database.default' => 'sqlite']);
        }
    }
}

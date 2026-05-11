<?php

namespace App\Providers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\URL;
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
        Request::setTrustedProxies(['*'], Request::HEADER_X_FORWARDED_ALL);

        // Force HTTPS behind Railway's edge proxy
        if (isset($_SERVER['HTTPS'])
            || ($_SERVER['HTTP_X_FORWARDED_PROTO'] ?? '') === 'https'
            || ($_SERVER['SERVER_PORT'] ?? '') === '443'
            || env('APP_ENV') === 'production'
        ) {
            URL::forceScheme('https');
        }

        // Override session domain when running on Railway
        config(['session.domain' => null]);

        if (! env('MONGODB_URI') || ! extension_loaded('mongodb')) {
            config(['database.default' => 'sqlite']);
        }

        if (extension_loaded('mongodb')) {
            try {
                DB::connection('mongodb')->getMongoClient()->listDatabases();
            } catch (\Throwable $e) {
                config(['database.default' => 'sqlite']);
            }
        }
    }
}

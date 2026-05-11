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

        $appUrl = env('APP_URL', '');
        if (str_contains($appUrl, 'railway.app')) {
            $httpsUrl = str_replace('http://', 'https://', $appUrl);
            config(['app.url' => $httpsUrl]);
            config(['app.asset_url' => $httpsUrl]);
            URL::forceRootUrl($httpsUrl);
            URL::forceScheme('https');
        } elseif (env('APP_ENV') === 'production') {
            URL::forceScheme('https');
        }

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

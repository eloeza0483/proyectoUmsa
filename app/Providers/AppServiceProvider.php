<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Vite;
use Illuminate\Support\Facades\URL;

class AppServiceProvider extends ServiceProvider
{
    // ... (registro de servicios)



public function boot(): void
{
    // Solo usa esto si realmente moviste los archivos a public/build
    Vite::useBuildDirectory('build');

    if (app()->environment('production')) {
        URL::forceScheme('https');
    }
}
}
<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Vite; // <--- ESTA LÍNEA ES LA QUE FALTA

class AppServiceProvider extends ServiceProvider
{
    // ... (registro de servicios)

    public function boot(): void
    {
        Vite::useBuildDirectory('build'); // Ahora sí reconocerá qué es Vite
    }
}
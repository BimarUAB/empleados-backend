<?php

namespace App\Providers;

use Illuminate\Support\Facades\Route; // ← ESTA LÍNEA FALTABA
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    public function register(): void
    {
        //
    }

    public function boot(): void
    {
        Route::prefix('api')
            ->middleware('api')
            ->namespace($this->app->getNamespace())
            ->group(base_path('routes/api.php'));
    }
}
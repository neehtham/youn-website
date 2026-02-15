<?php

namespace App\Providers;

use App\Models\Carrosel;
use Illuminate\Database\Eloquent\Relations\Relation;
use Illuminate\Support\Facades\Vite;
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
        Relation::morphMap([
            'events' => \App\Models\Event::class,
            'media' => \App\Models\Media::class,
            'users' => \App\Models\User::class,
            'carrosel' => Carrosel::class,
        ]);
        Vite::prefetch(concurrency: 3);
    }
}

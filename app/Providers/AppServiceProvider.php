<?php

namespace App\Providers;

use App\Interfaces\GitHub;
use App\Interfaces\Spotify;
use App\Services\GitHub\GithubService;
use App\Services\Spotify\SpotifyService;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        $this->app->bind(
            abstract: GitHub::class,
            concrete: fn(): GitHub => new GithubService(
                token: config('services.github.token'),
            )
        );
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        //
    }
}

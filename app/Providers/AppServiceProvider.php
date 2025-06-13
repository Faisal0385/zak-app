<?php

namespace App\Providers;

use App\Models\SocialMediaLink;
use Illuminate\Pagination\Paginator;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\View;
use App\Models\SiteSetting;

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
            $siteSettings = SiteSetting::first(); // Assumes one row
            $socialLinks = SocialMediaLink::all(); // Fetch all social media links

            $view->with([
                'siteSettings' => $siteSettings,
                'socialLinks' => $socialLinks,
            ]);
        });

        Paginator::useBootstrap();
    }
}

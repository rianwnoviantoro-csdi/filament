<?php

namespace App\Providers;

use App\Http\Composers\SettingsComposer;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;

class ViewServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        View::composer('includes.header', SettingsComposer::class);
        View::composer('includes.footer', SettingsComposer::class);
        View::composer('pages.layanan.index', SettingsComposer::class);
        View::composer('pages.pelanggan.index', SettingsComposer::class);
        View::composer('pages.info.index', SettingsComposer::class);
        View::composer('pages.publikasi.index', SettingsComposer::class);
        View::composer('pages.publikasi.detail', SettingsComposer::class);
    }
}

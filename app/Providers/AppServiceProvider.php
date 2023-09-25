<?php

namespace App\Providers;

use App\View\Components\Button;
use App\View\Components\SubmitButton;
use Illuminate\Support\Facades\Blade;
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
        Blade::component('button', Button::class);
        Blade::component('submit-button', SubmitButton::class);
    }
}

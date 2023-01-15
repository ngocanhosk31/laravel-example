<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Blade;
use App\View\Components\Alert;
use App\View\Components\Input\Button;
use App\View\Components\Forms\Button as FormButton;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
        // Blade::directive('datetime', function ($expression) {
        //     $expression = trim($expression, '\'');
        //     $expression = trim($expression, '"');
        //     $dateObject = date_create($expression);
        //     // dd($dateObject);
        //     // dd($dateObject->format("d/m/Y H:i:s"));
        //     if (!empty($dateObject)) {
        //         $dateFormat = $dateObject->format("d/m/Y H:i:s");
        //         return $dateFormat;
        //     }
        //     return false;
        // });
        // Blade::if ('env', function ($value) { //@env('local')
        //     // tra ve gia tri boolean
        //     if (config('app.env') === $value) {
        //         return true;
        //     }
        //     return false;
        // });
        // cach dang ki thu cong
        Blade::component('package-alert', Alert::class);
        // Blade::component('button', Button::class);
        // Blade::component('form-button', FormButton::class);
    }
}
<?php

namespace Ariaieboy\FilamentJalaliDatetimepicker;

use Closure;
use Filament\Support\Assets\AlpineComponent;
use Filament\Support\Assets\Js;
use Filament\Support\Facades\FilamentAsset;
use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;

class FilamentJalaliDatetimepickerServiceProvider extends PackageServiceProvider
{
    public function bootingPackage(): void
    {
        FilamentAsset::register([
            AlpineComponent::make('jalali-datetime-picker', __DIR__ . '/../resources/dist/js/jalali-date-time-picker.js')
        ], package: "ariaieboy/jalali-datetime-picker");
    }

    public function configurePackage(Package $package): void
    {
        /*
         * This class is a Package Service Provider
         *
         * More info: https://github.com/spatie/laravel-package-tools
         */
        $package
            ->name('filament-jalali-datetimepicker')
            ->hasViews();
    }
}

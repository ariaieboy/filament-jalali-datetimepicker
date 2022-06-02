<?php

namespace Ariaieboy\FilamentJalaliDatetimepicker;

use Filament\PluginServiceProvider;
use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;

class FilamentJalaliDatetimepickerServiceProvider extends PluginServiceProvider
{
    protected array $beforeCoreScripts = [
        'my-package-scripts' => __DIR__ . '/../resources/dist/js/jalali-date-time-picker.js',
    ];
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

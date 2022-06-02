<?php

namespace Ariaieboy\FilamentJalaliDatetimepicker\Tests;

use Ariaieboy\FilamentJalaliDatetimepicker\FilamentJalaliDatetimepickerServiceProvider;
use Illuminate\Database\Eloquent\Factories\Factory;
use Orchestra\Testbench\TestCase as Orchestra;

class TestCase extends Orchestra
{
    protected function setUp(): void
    {
        parent::setUp();

        Factory::guessFactoryNamesUsing(
            fn (string $modelName) => 'Ariaieboy\\FilamentJalaliDatetimepicker\\Database\\Factories\\'.class_basename($modelName).'Factory'
        );
    }

    protected function getPackageProviders($app)
    {
        return [
            FilamentJalaliDatetimepickerServiceProvider::class,
        ];
    }

    public function getEnvironmentSetUp($app)
    {
        config()->set('database.default', 'testing');

        /*
        $migration = include __DIR__.'/../database/migrations/create_filament-jalali-datetimepicker_table.php.stub';
        $migration->up();
        */
    }
}

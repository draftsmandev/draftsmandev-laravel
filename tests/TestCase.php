<?php

namespace DraftsmanDev\DraftsmanDevLaravel\Tests;

use DraftsmanDev\DraftsmanDevLaravel\DraftsmanDevLaravelServiceProvider;
use Illuminate\Database\Eloquent\Factories\Factory;
use Orchestra\Testbench\TestCase as Orchestra;

class TestCase extends Orchestra
{
    protected function setUp(): void
    {
        parent::setUp();

        Factory::guessFactoryNamesUsing(
            fn (string $modelName) => 'DraftsmanDev\\DraftsmanDevLaravel\\Database\\Factories\\'.class_basename($modelName).'Factory'
        );
    }

    protected function getPackageProviders($app)
    {
        return [
            DraftsmanDevLaravelServiceProvider::class,
        ];
    }

    public function getEnvironmentSetUp($app)
    {
        config()->set('database.default', 'testing');

        /*
        $migration = include __DIR__.'/../database/migrations/create_draftsmandev-laravel_table.php.stub';
        $migration->up();
        */
    }
}

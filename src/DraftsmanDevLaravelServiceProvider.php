<?php

namespace DraftsmanDev\DraftsmanDevLaravel;

use DraftsmanDev\DraftsmanDevLaravel\Commands\DraftsmanDevLaravelCommand;
use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;

class DraftsmanDevLaravelServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        /*
         * This class is a Package Service Provider
         *
         * More info: https://github.com/spatie/laravel-package-tools
         */
        $package
            ->name('draftsmandev-laravel')
            ->hasConfigFile()
            ->hasViews()
            ->hasMigration('create_draftsmandev-laravel_table')
            ->hasCommand(DraftsmanDevLaravelCommand::class);
    }
}

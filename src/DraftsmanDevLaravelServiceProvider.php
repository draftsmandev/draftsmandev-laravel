<?php

namespace DraftsmanDev\DraftsmanDevLaravel;

use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;
use DraftsmanDev\DraftsmanDevLaravel\Commands\DraftsmanDevLaravelCommand;

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

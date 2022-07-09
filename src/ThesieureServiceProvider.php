<?php

namespace Dinhdjj\Thesieure;

use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;
use Dinhdjj\Thesieure\Commands\ThesieureCommand;

class ThesieureServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        /*
         * This class is a Package Service Provider
         *
         * More info: https://github.com/spatie/laravel-package-tools
         */
        $package
            ->name('thesieure')
            ->hasConfigFile()
            // ->hasViews()
            // ->hasMigration('create_thesieure_table')
            // ->hasCommand(ThesieureCommand::class)
        ;
    }
}

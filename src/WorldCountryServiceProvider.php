<?php

namespace zoparga\WorldCountry;

use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;
use zoparga\WorldCountry\Commands\WorldCountryCommand;

class WorldCountryServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        /*
         * This class is a Package Service Provider
         *
         * More info: https://github.com/spatie/laravel-package-tools
         */
        $package
            ->name('worldcountries')
            //->hasConfigFile()
            //->hasViews()
            ->hasMigration('create_worldcountries_table');
        //->hasCommand(WorldCountryCommand::class);
    }
}

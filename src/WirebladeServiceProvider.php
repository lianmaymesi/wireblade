<?php

namespace Lianmaymesi\Wireblade;

use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;
use Lianmaymesi\Wireblade\Commands\WirebladeCommand;

class WirebladeServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        /*
         * This class is a Package Service Provider
         *
         * More info: https://github.com/spatie/laravel-package-tools
         */
        $package
            ->name('wireblade')
            ->hasConfigFile()
            ->hasViews()
            ->hasMigration('create_wireblade_table')
            ->hasCommand(WirebladeCommand::class);
    }
}

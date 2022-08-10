<?php

namespace Codewithdiki\FilamentDaterange;

use Illuminate\Support\ServiceProvider;
use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;

class FilamentDaterangeServiceProvider extends PackageServiceProvider
{

    public function configurePackage(Package $package): void
    {
        /*
         * This class is a Package Service Provider
         *
         * More info: https://github.com/spatie/laravel-package-tools
         */
        $package
            ->name('filament-daterange')
            ->hasAssets()
            ->hasViews();
    }
}

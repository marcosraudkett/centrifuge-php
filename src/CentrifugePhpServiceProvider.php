<?php

namespace Mvrc\CentrifugePhp;

use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;

class CentrifugePhpServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        $package
            ->name('centrifuge-php')
            ->hasConfigFile();
    }
}

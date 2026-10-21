<?php

declare(strict_types=1);

namespace EvoMark\LscacheLaravelInertia;

use Spatie\LaravelPackageTools\PackageServiceProvider;
use Spatie\LaravelPackageTools\Package;
use Illuminate\Routing\Router;
use Illuminate\Contracts\Http\Kernel;

class Provider extends PackageServiceProvider
{
     public function configurePackage(Package $package): void 
     {
        $package->name('lscache-laravel-inertia');
     }
}
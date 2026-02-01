<?php

namespace App\Providers;

use Illuminate\Support\Facades\Schema; // <-- هذا لازم
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    public function boot(): void
    {
        Schema::defaultStringLength(191);
    }
}

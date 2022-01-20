<?php

namespace Yadgen;

use Illuminate\Support\ServiceProvider;

class XcycSdkServiceProvider extends ServiceProvider
{
    public function boot()
    {
    }

    public function register()
    {
        $this->app->singleton('xcyc-sdk', function () {
        });
    }
}

<?php

namespace Yadgen\Xcyc;

use Illuminate\Support\ServiceProvider as LaravelServiceProvider;

class ServiceProvider extends LaravelServiceProvider
{
    public function boot()
    {
    }

    protected function setupConfig()
    {

    }

    public function register()
    {
        $this->setupConfig();

        $apps = [
            'crm' => '',
            'scrm' => '',
            'mini_program' => '',
        ];

        foreach ($apps as $name => $class) {

        }

        $this->app->singleton('xcyc', function () {
        });
    }
}

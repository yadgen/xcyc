<?php

namespace Xcyc;

use Illuminate\Support\ServiceProvider as LaravelServiceProvider;
use Xcyc\Crm\Application as Crm;
use Xcyc\Scrm\Application as Scrm;
use Xcyc\MiniProgram\Application as MiniProgram;

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
            'crm' => Crm::class,
            'scrm' => Scrm::class,
            'mini_program' => MiniProgram::class,
        ];

        foreach ($apps as $name => $class) {
            $this->app->singleton($name, function ($laravelApp) use ($name, $class) {
                $app = new $class();
                $app['request'] = $laravelApp['request'];

                return $app;
            });

            // $this->app->alias('xcyc.' . $name, $class);
        }
    }
}

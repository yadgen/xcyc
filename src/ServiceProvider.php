<?php

namespace Yadgen\Xcyc;

use Illuminate\Support\ServiceProvider as LaravelServiceProvider;
use Yadgen\Xcyc\Crm\Application as Crm;
use Yadgen\Xcyc\Scrm\Application as Scrm;
use Yadgen\Xcyc\MiniProgram\Application as MiniProgram;

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
            'xcyc' => Xcyc::class,
            'crm' => Crm::class,
            'scrm' => Scrm::class,
            'mini_program' => MiniProgram::class,
        ];

        foreach ($apps as $name => $class) {
            $this->app->singleton($name, function ($laravelApp) use ($name, $class) {
                return new $class;
            });
        }
    }
}

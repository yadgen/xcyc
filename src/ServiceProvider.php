<?php

namespace Xcyc;

use Illuminate\Support\ServiceProvider as LaravelServiceProvider;
use Xcyc\Scrm\OrderSaas\Card;
use Xcyc\Scrm\OrderSaas\Discount;
use Xcyc\Scrm\OrderSaas\Score;

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
            'scrm.discount' => Discount::class,
            'scrm.score' => Score::class,
            'scrm.card' => Card::class,
        ];

        foreach ($apps as $name => $class) {
            $this->app->singleton("xcyc.{$name}", function () use ($name, $class) {
                $app = new $class();

                return $app;
            });

            $this->app->alias('xcyc.' . $name, $class);
        }
    }
}

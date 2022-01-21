<?php

namespace Xcyc\OrderSaas;

use Pimple\Container;
use Pimple\ServiceProviderInterface;

class ServiceProvider extends ServiceProviderInterface
{
    public function register(Container $app)
    {
        $app['discount'] = function ($app) {
            return new Discount($app);
        };

        $app['score'] = function ($app) {
            return new Score($app);
        };

        $app['card'] = function ($app) {
            return new Card($app);
        };
    }
}

<?php

namespace Xcyc\Scrm\Kernel;

use Pimple\Container;

class ServiceContainer extends Container
{
    public function __construct()
    {
        parent::__construct();

        $this->registerProviders($this->getProviders());
    }

    public function getProviders()
    {
        return array_merge([], $this->providers);
    }

    public function registerProviders(array $providers)
    {
        foreach ($providers as $provider) {
            parent::register(new $provider());
        }
    }
}

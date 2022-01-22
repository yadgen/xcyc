<?php

namespace Xcyc\Scrm\Kernel;

class BaseOrderSaas
{
    public function __construct(ServiceContainer $app)
    {
        $this->app = $app;
    }
}

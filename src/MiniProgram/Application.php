<?php

class Application
{
    public function __call($method, $arguments)
    {
        return $this['base']->$method(...$arguments);
    }
}

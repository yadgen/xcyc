<?php

namespace Xcyc;

class Factory
{
    public static function make($name, array $config)
    {
        $namespace = Kernel\Support\Str::studly($name);
        $application = "Xcyc\\{$namespace}\\Application";

        return new $application($config);
    }

    public static function __callStatic($name, $arguments)
    {
        return self::make($name, ...$arguments);
    }
}

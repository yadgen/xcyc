<?php

namespace Xcyc\Tests;

class Client
{
    protected $a;

    protected $b;

    public function __construct(int $a, int $b)
    {
        $this->a = $a;
        $this->b = $b;
    }

    public function addTogether()
    {
        return $this->a + $this->b;
    }
}

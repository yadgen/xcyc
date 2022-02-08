<?php

namespace Xcyc\Kernel;

class BaseOrderSaas
{
    public $actualPayPrice = 0;

    public function setActualPayPrice($actualPayPrice)
    {
        $this->actualPayPrice = $actualPayPrice;
    }
}

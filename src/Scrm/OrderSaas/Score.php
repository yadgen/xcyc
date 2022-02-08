<?php

namespace Xcyc\Scrm\OrderSaas;

use Xcyc\Kernel\BaseOrderSaas;

class Score extends BaseOrderSaas
{
    public function use($usePrice)
    {
        $usePrice = $this->actualPayPrice - $usePrice;

        return $usePrice;
    }
}

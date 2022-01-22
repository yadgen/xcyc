<?php

namespace Xcyc\Scrm\OrderSaas;

use Xcyc\Scrm\Kernel\BaseOrderSaas;

class Discount extends BaseOrderSaas
{
    public function use($discounttPrice)
    {
        $discounttPrice = $discounttPrice + 100;

        return $discounttPrice;
    }
}

<?php

namespace Xcyc\Scrm\OrderSaas;

class Card
{
    public function use()
    {
        $data = [
            'use card'
        ];
        return response()->json($data);
    }
}

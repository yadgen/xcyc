<?php

namespace Xcyc;

class XcycTest
{
    public function printTest()
    {
        $response = [
            'test',
        ];

        return response()->json($response);
    }
}

<?php

namespace Xcyc\Tests;

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

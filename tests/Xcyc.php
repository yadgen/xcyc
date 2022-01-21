<?php

namespace Xcyc\Tests;

class Xcyc
{
    public function printTest()
    {
        $response = [
            'test',
        ];

        return response()->json($response);
    }
}

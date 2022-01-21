<?php

namespace Xcyc;

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

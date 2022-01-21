<?php

include __DIR__ . '/../vendor/autoload.php';

use Xcyc\Tests\Client;

$client = new Client(5, 1);

echo $client->addTogether() . "\n";

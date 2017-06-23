<?php

use SmoDav\iPay\Cashier;

require "vendor/autoload.php";

$cashier = new Cashier();

$transactChannels = [
    Cashier::CHANNEL_MPESA,
    Cashier::CHANNEL_AIRTEL,
];

$response = $cashier
    ->usingChannels($transactChannels)
    ->usingVendorId('your vendor id', 'your vendor secret')
    ->withCallback('http://yourcallback.com')
    ->withCustomer('0722000000', 'demo@example.com', false)
    ->transact(10, 'your order id', 'your order secret');

echo $response;

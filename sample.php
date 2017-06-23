<?php

use SmoDav\iPay\Cashier;

require "vendor/autoload.php";

$cashier = new Cashier();

$response = $cashier
    ->usingVendorId('your vendor id', 'your vendor secret')
    ->withCallback('http://yourcallback.com')
    ->withCustomer('0722000000', 'demo@example.com', false)
    ->transact(10, 'your order id', 'your order secret');

# iPay Africa Web Based Integration API
[![Build Status](https://travis-ci.org/SmoDav/ipay.svg?branch=master)](https://travis-ci.org/SmoDav/ipay)
[![Total Downloads](https://poser.pugx.org/smodav/ipay/d/total.svg)](https://packagist.org/packages/smodav/ipay)
[![Latest Stable Version](https://poser.pugx.org/smodav/ipay/v/stable.svg)](https://packagist.org/packages/smodav/ipay)
[![Latest Unstable Version](https://poser.pugx.org/smodav/ipay/v/unstable.svg)](https://packagist.org/packages/smodav/ipay)
[![License](https://poser.pugx.org/smodav/ipay/license.svg)](https://packagist.org/packages/smodav/ipay)

This is a PHP package for iPay Africa Web based integration. The API allows a merchant to initiate C2B transaction and
receive payments from the customers.

## Installation

Pull in the package through Composer.
```bash
composer require smodav/ipay
```

## Usage
To make a request is simple. Just initiate the `Cashier` and finalize the transaction:
```php
use SmoDav\iPay\Cashier;

require "vendor/autoload.php";

$cashier = new Cashier();

$response = $cashier
    ->usingVendorId('your vendor id', 'your vendor secret')
    ->withCallback('http://yourcallback.com')
    ->withCustomer('0722000000', 'demo@example.com', false)
    ->transact(10, 'your order id', 'your order secret');
```
The `$response` variable will hold the html response from iPay. Just render it to the page and
the process would be complete.

## License

The M-Pesa Package is open-sourced software licensed under the [MIT license](http://opensource.org/licenses/MIT).

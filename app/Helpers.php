<?php

require 'vendor/autoload.php';

use Gerardojbaez\Money\Money;

$money = new Money(100);
$money->format();

public function getPriceAttribute($price)
{
    return $this->attributes['price'] = sprintf('U$ %s', number_format($price, 2));
}

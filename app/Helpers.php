<?php

require 'vendor/autoload.php';

use Gerardojbaez\Money\Money;

$money = new Money(100);
$money->format();

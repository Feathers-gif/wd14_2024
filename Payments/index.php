<?php

use Payments\Class\Asia\Tinkof;
use Payments\Class\EU\Sber;


$tinkoff = new Tinkof();

$tinkoff->setUserId(1)
    ->setPrice(1234)
    ->setOrderId(6)
    ->setData(['test' => 'test'])
    ->send();

$sber = new Sber();

$sber->setUserId(1)
    ->setPrice(1234)
    ->setOrderId(6)
    ->setData(['test' => 'test'])
    ->send();


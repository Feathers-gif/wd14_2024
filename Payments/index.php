<?php

use Payments\Abstract\Tinkof as TinkofEU;


$tinkoff = new Tinkof();
$tinkoff = new TinkofEU();

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


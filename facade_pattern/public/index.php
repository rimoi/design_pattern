<?php
require(dirname(__DIR__).'/vendor/autoload.php');

$cashPay = new \App\PayType\CashPay();
$cardPay = new \App\PayType\CardPay();

$facade = new \App\FacadePay($cardPay);

echo $facade->pay();
<?php
require(dirname(__DIR__).'/vendor/autoload.php');

$expresso = new \App\Expresso();
$cappuccino =  new \App\Cappuccino();
$decoratorExpresso = new \App\CaffeeDecorator($expresso);
$decoratorCappuccino = new \App\CaffeeDecorator($cappuccino);

echo "Expresso : {$decoratorExpresso->getCost()}" . ' € <br />';
echo "Cappuccino : {$decoratorCappuccino->getCost()}" . ' €';

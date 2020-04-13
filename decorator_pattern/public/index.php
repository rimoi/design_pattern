<?php
require(dirname(__DIR__).'/vendor/autoload.php');

$cafee = new \App\Cafee();
$cafee_cappuccino = new \App\CappuccinoDecorator($cafee);
$cafee_expresso = new \App\ExpressoDecorator($cafee);
$cafee_cappucino_expresso = new \App\ExpressoDecorator($cafee_cappuccino);

echo "Café Expresso : {$cafee_expresso->getCost()}" . ' € <br/>';
echo "Café Cappuccino : {$cafee_cappuccino->getCost()}" . ' €<br/>';
echo "Café Cappuccino Expresso : {$cafee_cappucino_expresso->getCost()}" . ' € <br/>';

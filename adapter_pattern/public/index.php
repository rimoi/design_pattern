<?php
require(dirname(__DIR__).'/vendor/autoload.php');

$cache = new \Doctrine\Common\Cache\FilesystemCache(dirname(__DIR__).'/cache');
$doctrineAdapter = new \App\Cache\DoctrineAdapter($cache);

$hello = new App\Hello();

echo $hello->sayHello($doctrineAdapter);
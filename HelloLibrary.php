<?php
require_once __DIR__ . '/vendor/autoload.php';

$customer = new clarksye\Belajar\Customer("Han");
echo $customer->sayHello("clark") . "<br>";
echo $customer->sayHello();
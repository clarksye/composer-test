<?php
require_once __DIR__ . '/vendor/autoload.php';

use clarksye\Data\People;

$people = new People("han");

echo $people->sayHello("clark");
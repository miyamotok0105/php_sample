<?php
namespace Pattern;
require_once('./wrapper/CarFactory.php');
use Pattern\wrapper\CarFactory;

$car = new CarFactory();
$car = $car->create("1", "toyota");
print $car->getName()."\n";


$car = new CarFactory();
$car = $car->create2("2", "toyota");
print $car->getName()."\n";

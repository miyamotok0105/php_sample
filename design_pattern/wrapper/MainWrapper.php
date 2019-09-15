<?php
namespace Pattern;
require_once('./sdk/Car.php');
require_once('./wrapper/CarWrapper.php');
use Pattern\wrapper\CarWrapper;


$car = new CarWrapper();
$car = $car->create("toyota");

print $car->getName()."\n";



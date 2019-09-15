<?php
namespace Pattern;
require_once('./sdk/Car.php');

use Pattern\sdk\Car;

$car = new Car("toyota");
print $car->getName()."\n";





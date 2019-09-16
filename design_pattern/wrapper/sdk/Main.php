<?php
namespace Pattern\sdk;

require "./Car.php";

use Pattern\sdk\Car;

$car = new Car("1", "toyota");
print $car->getName()."\n";



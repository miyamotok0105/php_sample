<?php
namespace Pattern\wrapper;

require "./CarWrapper.php";

use Pattern\CarWrapper;

$car = new CarWrapper("toyota");

print $car->getName()."\n";



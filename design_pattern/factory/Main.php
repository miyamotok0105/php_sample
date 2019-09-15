<?php

namespace Pattern;

require "./CarFactory.php";
use Pattern\CarFactory;

$car = CarFactory::create('toyota');

print $car->getName()."\n";


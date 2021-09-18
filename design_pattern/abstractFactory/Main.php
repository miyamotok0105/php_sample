<?php

namespace Factory2;

// require "./CarFactory.php";
// use Pattern\CarFactory;
spl_autoload_register(function ($class_name) {
  include $class_name . '.php';
  print($class_name."\n");
});


// $car = CarFactory::create('toyota');

// print $car->getName()."\n";


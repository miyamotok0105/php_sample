<?php
namespace Pattern\wrapper;

require_once('./sdk/Car.php');
require_once('./sdk/sdk2/Car.php');
use Pattern\sdk\Car;
use Pattern\sdk\sdk2\Car as Car2;

class CarWrapper extends Car
{
   public function __construct()
   {
   }
}

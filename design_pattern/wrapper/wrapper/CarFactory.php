<?php
namespace Pattern\wrapper;

// require_once('./sdk/Car.php');
// require_once('./sdk/sdk2/Car.php');
// use Pattern\sdk\Car;
// use Pattern\sdk\sdk2\Car as Car2;

require_once('./wrapper/CarWrapper.php');
require_once('./wrapper/Car2Wrapper.php');
use Pattern\wrapper\CarWrapper;
use Pattern\wrapper\Car2Wrapper;

class CarFactory
{
   public function __construct()
   {
   }

   public function create($name){
        return new CarWrapper($name);
   }

   private function createCar(){
        return new CarWrapper($name);
   }

   public function create2($name){
        return new Car2Wrapper($name);
   }
}
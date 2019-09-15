<?php
namespace Pattern\wrapper;

require_once('./sdk/Car.php');
use Pattern\sdk\Car;

class CarWrapper
{
   public function __construct()
   {
   }

   public function create($name){
        return new Car($name);
   }
}
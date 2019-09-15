<?php
namespace Pattern\sdk;

class Car
{
   private $name;

   public function __construct($name)
   {
      $this->name = $name;
   }

   public function getName()
   {
      return $this->name;
   } 
}
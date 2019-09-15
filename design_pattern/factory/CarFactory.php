<?php

namespace Pattern;

require "./Car.php";

use Pattern\Car;

class CarFactory
{
    public static function create($name)
    {
        return new Car($name);
    }
}


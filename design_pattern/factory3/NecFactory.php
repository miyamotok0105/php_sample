<?php
declare(strict_types=1);

class NecFactory extends PersonalComputerFactory
{
    public function create() {
        return new NecPersonalComputer();
    }
}


?>

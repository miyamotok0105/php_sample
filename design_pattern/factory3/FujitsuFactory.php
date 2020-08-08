<?php
declare(strict_types=1);

class FujitsuFactory extends PersonalComputerFactory
{
    public function create() {
        return new FujitsuPersonalComputer();
    }
}


?>

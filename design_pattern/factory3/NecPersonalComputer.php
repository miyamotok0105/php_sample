<?php
declare(strict_types=1);

class NecPersonalComputer implements PersonalComputer
{
    public function start() {
      print("nec start");
    }

    public function shutDown() {
      print("nec shut down");
    }
}

?>

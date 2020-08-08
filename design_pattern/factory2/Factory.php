<?php
declare(strict_types=1);

class Factory
{

    public function create(string $computerName) {
      if ($computerName == "nec") {
        return new NecPersonalComputer();
      }

      throw new Exception("No object, please set exits object name.");
    }
}


?>

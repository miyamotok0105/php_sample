<?php
declare(strict_types=1);

abstract class Factory
{
    abstract protected function createPersonalComputer();

    public function create() {
      PersonalComputer personalComputer = $this->createPersonalComputer();
      return personalComputer;
    }
}


?>

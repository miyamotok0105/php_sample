<?php
declare(strict_types=1);

abstract class PersonalComputerFactory
{
    abstract protected function create();

    public function start()
    {
      $pc = $this->create();
      return $pc;
    }
}


?>

<?php
namespace Pattern\sdk;

class Car
{
    private $id;
    private $name;

    public function __construct($id, $name)
    {
        $this->name = $name;
        $this->id = $id;
    }

    public function getName()
    {
      return $this->id." is id. ".$this->name." is name.";
    }
}
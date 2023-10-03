<?php

// Abstract class

abstract class Vehicle {
  protected $name;
  protected $color;

  public function accelerate() {

  }

  public function apply_break() {

  }

 abstract public function service();

}


class Car extends Vehicle {
  public function service()
  {
    
  }
}

class Bike extends Vehicle {
  public function service()
  {
    
  }
}

$ob = new Bike();


 ?>
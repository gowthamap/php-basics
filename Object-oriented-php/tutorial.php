<?php

// inheritance

class Vehicle {
  protected $name;
  protected $wheels;
  protected $color;

  function __construct(){
    echo 'initialized Vehicle class';
  }

  public function accelerate() {
    echo "Accelerated vehicle";
  }

  public function apply_break() {
    echo "Break!!!";
  }

}

$ob = new Vehicle();

class Car extends Vehicle {

  function __construct(){
    parent::__construct();
    echo 'Initialize Car class';
  }

  protected $seat_belt;
  protected $window;

}

class Bike extends Vehicle {

  function __construct(){
    parent::__construct();
    echo 'Initialize Bike class';
  }

 protected $side_stand;
}

$bike_object = new Bike();
echo $bike_object->accelerate();
echo $bike_object->apply_break();

$car_object = new Car();
echo $car_object->accelerate();
echo $car->object->apply_break();



 ?>
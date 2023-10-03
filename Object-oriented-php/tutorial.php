<?php

// Abstract class

// interface

class Vehicle {

}

class Fan {

}

class Toy {

}

interface Charger {
  public function recharge();
}

class ElectricCar extends Vehicle implements Charger {
  public function recharge()
  {
    
  }
}

class PortableFan extends Fan implements Charger {
  public function recharge()
  {
    
  }

}

class ElectricToy extends Toy implements Charger {
  public function recharge()
  {
     
  }
}

 ?>
<?php


// Polymorphism in php
// method overriding

class Father {
  protected $name;
  public function do_magic() {
    echo 'Magic of father';
  }
}

class Child extends Father {
  public function do_magic()
  {
    echo 'Magic of child';
  }
}

$child_ob = new Child();
$child_ob->do_magic();

 ?>
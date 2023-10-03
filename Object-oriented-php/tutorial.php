<?php

class Book {
  private $title;
  private $price;
  private $author;

  function __construct($title, $price, $author){
    $this->title = $title;
    $this->price = $price;
    $this->author = $author;
  }

  public function display() {
    echo "Title: ".$this->title. "<br>Price :" .$this->price."<br>Author :".$this->author;
  }

}

$balyakala_sakhi = new Book("Balyakala sakhi", 150, "Basheer");
$mathilukal = new Book("mathilukal", 160, "Basheer");

$balyakala_sakhi->display();
$mathilukal->display();

 ?>
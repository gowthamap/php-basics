<?php

$numbers = array(10,20);
// echo $numbers[1];

// $ar = ["name" => "Tintu", "age"=> 28, "mark"=>40];
array_push($numbers, 30);
array_push($numbers, 30);
array_push($numbers, 30);
array_push($numbers, "this is a string");


var_dump($numbers);

unset($numbers[5]);

var_dump($numbers);

?>
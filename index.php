<?php
require 'header.php';

function sum($a, $b=50) {
  return $a+$b;
}

$s= sum(10);
echo $s;

include 'footer.php'

?>
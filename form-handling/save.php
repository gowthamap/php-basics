<?php 

// var_dump($_POST);

$username = $_POST['username'];
$password = $_POST['password'];

if($username == "admin" && $password=="user") {
  echo "login success";
} else {
  echo "login failed";
}

?>
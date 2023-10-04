<?php 

session_start();

// $_SESSION['username'] = 'tintu';
// echo $_SESSION['username'];

// $_SESSION['username'] = 'tintu';
// $_SESSION['phone'] = '123456789';

// unset($_SESSION['username']);

session_destroy();

var_dump($_SESSION);

?>
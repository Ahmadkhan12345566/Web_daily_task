<?php

session_start();

$name = "arslan";

// Set session variables
$_SESSION["favcolor"] = "green";
$_SESSION["favanimal"] = "cat";
$_SESSION['me'] = "Cat";
echo "Session variables are set.";

print_r($_SESSION);


/*
$cookie_name = "user";
$cookie_value = "Arslan";
setcookie($cookie_name, $cookie_value, time() + (30), "/"); // 86400 = 1 day
*/

$_SESSION['favcolor'] = null;

unset($_SESSION['me']);

print_r($_SESSION);


 ?>

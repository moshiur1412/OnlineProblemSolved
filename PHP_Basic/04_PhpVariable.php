<?php
	# 
$A = "A";
$a = "a";
$_a = "_a";
$a1 = "a1";
$a_b = "a_b";
$aB = "aB";

$number1 =5;
$number2 =5.2;

echo $A;
echo "<br>";
echo $a;
echo "<br>";

var_dump($number1); // int(5)

echo "<br>";

echo gettype($number1); // integer

echo "<br>";

settype($a, "integer");

echo "<br>";

var_dump($a); // int(0)




# PHP Predefined Variables
// 1. $GLOBALS
// 2. $_SERVER
// 3. $_GET
// 4. $_POST
// 5. $_FILES
// 6. $_COOKIES
// 7. $_SESSION
// 8. $_REQUEST
// 9. $_ENV


# User Defined Variables:
// 1. Variable Scope
// 2. Variable Variables
// 3. Reference Variable


?>
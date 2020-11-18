<?php 
/**
* Logical Operators
* 1. And (&&) Operator
* 2. OR (||) Operator
* 3. XOR Operator
*/

$age = 27;

echo ($age >0 And $age <30) ? "Eligiable" : "Not eligiable"; // Eligiable

echo "<br>";

echo $age >0 && $age <30; // 1

echo "<br>";

echo ($age >0 || $age <30); // 1

echo "<br>";

echo $age>0 XOR $age <30; // empty


?>
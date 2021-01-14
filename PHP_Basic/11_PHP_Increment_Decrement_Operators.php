<?php
$c = 10;
$c++;
echo $c; // 11
echo "<br>";
$c--;
echo $c; // 10

echo "<br>";

/**
* Increment/Decriment Operator Type
* Pre Increment: First increment/Decriment then print
* Post Increment: First print then Increment/Decriment
*/

$c = 100;
$c++; // Pre Increment;
echo $c; // 101
echo "<br>". $c++ . "<br>"; // 101 Post Increment;
echo $c; // 102


// pre incrent antother way
++$c;
echo "<br>".$c; // 103


# Pre Decrement
--$c;
echo "<br>".$c; // 102

# Post Decrement
$c--;
echo "<br>".$c; // 101

?>
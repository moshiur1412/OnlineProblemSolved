<pre>
	# Variables: Variables in PHP are represented by a dollar sign followed by the name variable.
	# The variable name is case-sensitive
	# This is a special variable that can't be assigned
</pre>
<?php

// ini_set('display_errors', 1);
// ini_set('display_startup_errors', 1);
// error_reporting(E_ALL);

$var = 'Bob';
$Var = 'Joe';

// Output:: Bob, Joe
// echo "$var, $Var"; 

// invalid; starts with a number
// $4site = 'not yet';

// valid; stats with an underscore
$_4site = 'not yet';
// valid; 'a' is extended ASCII 288
$täyte = 'mansikka'; 


$foo = "Bob <br>";
$bar = &$foo;
$bar = "My name is $bar";

// My name is Bob
// echo $foo;
// My name is Bob
// echo $bar;

$foo = 25;;

$bar = &$foo;
$bar = (24*7);
echo $foo; // 168
echo $bar; // 168




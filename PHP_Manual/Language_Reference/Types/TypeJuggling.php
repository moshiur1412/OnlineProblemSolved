<pre>
	# Type Juggling: type juggling is one of the features of PHP, provided, to deal with PHP variables. 
	# As we have seen already, PHP is a loosely typed language, and hence, capable of taking the data type of the value, as that of the variable, to which that value is assigned.
</pre>

<?php

// Output: string(1) "1"
$foo = "1";						// $foo is string (ASCII 49)
// Output: int(2)
$foo *= 2; 						// $foo is an integer (2)
// Output: float(2.6)
$foo = $foo * 1.3; 				// $foo is now a float (2.6)
// output: 50 -> Err: Numeric value
$foo = 5 * "10 Little Piggies";	// $foo is integer (50)
// output: 50 -> Err: Numeric value
$foo = 5 * "10 Small Pigs"; 	// $foo is integer (50)
echo "<hr>";

// Output: 50
echo $foo;
echo "<hr>";

// Output: 50
print($foo);
echo "<hr>";

// Output: int(50)
var_dump($foo);
echo "<hr>";

// Output: 50
print_r($foo);
echo "<hr>";

// Output: integer
echo gettype($foo);
echo "<hr>";

# Array Example -->
$a = 'car';		// $a is a string
$a[0] = 'b';	// $a is still a string
// Output: bar
echo $a;
echo "<hr>";

# Type Casting -->
$foo = 10;	// $foo is an integer
$bar = (boolean) $foo; 	// $bar is a boolean

// Output: bool(true) 
var_dump($bar);
echo "<hr>";

$bar = (int) $bar; 
$bar = (integer) $bar;
// Output: int(1) 
var_dump($bar);
echo "<hr>";

$bar = (bool) $bar; 
// Output: bool(true) 
var_dump($bar);
echo "<hr>";

$bar = (float) $bar;
$bar = (double) $bar;
$bar = (real) $bar;
// Output: float(1)
var_dump($bar);
echo "<hr>";

$bar = (string) $bar;
// Output: string(1) "1"
var_dump($bar);
echo "<hr>";

$bar = (array) $bar;
// Output: array(1) { [0] => string(1) "1"} 
var_dump($bar);
echo "<hr>";

$bar = (object) $bar;
// Output: object(stdClass)#1 { ["0"] => string(1) "1"} 
var_dump($bar);
echo "<hr>";

$bar = (unset) $bar;
// Output: NULL
var_dump($bar);
echo "<hr>";





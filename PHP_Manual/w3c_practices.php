
<?php

// function myTest() {
// 	echo "<h2> PHP is fun!</h2>";
//     echo "Hello world!</br>";
//     echo "I'm about to learn php!<br>";
//     echo "This ", "string " , "was ", "made ", "with multiple parameters." ;
    
// }

// myTest();

function DisplayVariable1(){
	$txt1 = "Learn PHP";
	$txt2 = "W3Schools.com";

	$x = 5;
	$y = 4;

	echo "<h2>". $txt1 . "</h2>";
	echo "Study PHP at" . $txt2 . "<br>";
	echo $x+$y;
}


function DisplayVariable(){
	$txt1 = "Learn PHP";
	$txt2 = "W3Schools.com";

	$x = 5;
	$y = 4;

	print "<h2>". $txt1 . "</h2>";
	print "Study PHP at" . $txt2 . "<br>";
	print $x+$y;
}
// DisplayVariable();


function DataType(){
	// String, Integer, float, Boolean, Array, Object, Null, Resource

	# String
	// $x = "Hello world!";
	// $y = "Hello world!";

	// echo $x;
	// echo "<br>";
	// echo $y;

	# Integer 
	// $x = 5985;
	// $x = 10.365;

	// $x = true;
	// $x = array("Volvo", "BMW", "Toyota");
	// var_dump($x);


}

// DataType();


class Car {
	function Car() {
		$this->model = "VW";
	}
}

$ob = new Car();
// echo $ob->model;
$x = null;
// var_dump($x);

function phpString(){
	$x = "Hello world!";
	// echo strlen($x); // ->12 return length of a string

	// echo str_word_count($x); // ->2 count words
	// echo strrev($x); // outputs !dlrow olleH

	// echo strpos($x, "world"); // -> 6 // search for a text

	// string replace
	echo str_replace("world","Dolly", "Hello world!");

}

// phpString();



function phpNumbers(){
	$x = 5985;
	$x = 59.85;
	// var_dump(is_int($x));
	// var_dump(is_integer($x));
	// var_dump(is_long($x));

	// var_dump(is_float($x));

	$x = 1.9e411;
	// var_dump($x);
	// var_dump(is_finite($x));

	$x = acos(8);
	// var_dump($x);

	// $x = 9585;
	// var_dump(is_numeric($x));

	// $x = "9585";
	// var_dump(is_numeric($x));

	// $x = "50.85" + 100;
	// // var_dump($x);
	// var_dump(is_numeric($x));

	// $x = "Hello";
	// var_dump(is_numeric($x));


	# php casting strings 

	$x = 23565.768;
	$int_cast = (int)$x;

	echo $int_cast;

	echo "<br>";

	$x = "235343.23";
	$int_cast = (int)$x;

	echo $int_cast;







}


// phpNumbers();



function phpMath(){
	// echo pi(); // 3.1415926535898
	// echo min(0,150,30,20,-8,-200); // -200
	// echo max(0,150,30,20,-8,-200); // 150

	// echo abs(-6.7); // positive ->6.7;

	// echo sqrt(64); // ->8 


	// echo round(0.60); // ->1
	// echo round(0.49); // ->0

	// echo rand();
	echo rand(1,100);

}
// phpMath();



# PHP constants 

define("GREETING", "Welcome to lll", true);
define("cars", ['A', 'B', 'C']);

function myTest(){
	// echo greeting;
	echo cars[0];
}

// myTest();



# PHP Operations 
// Arithmetic operators
// Assignment operators
// Comparison operators
// Increment/Decrement operators
// Logical operators
// String operators
// Array operators
// Conditional assignment operators


$x = 3;
$y = 2;
// echo ($x<=>$y); // -1,0,+1


function phpArithmeticOperation($x, $y){


	$addition = $x+$y;
	$subtraction = $x-$y;
	$multiplication = $x*$y;
	$division = $x/$y;
	$modulus = $x%$y;
	$exponentiation = $x**$y;

	return $exponentiation;
}

// echo phpArithmeticOperation(2,2);

function assignmentOperators($x,$y){
	// $x +=$y;
	// $x -=$y;
	// $x *=$y;
	// $x /=$y;
	// $x %=$y;

	return $x;
}

// echo assignmentOperators(2,3);

function comparisonOperators($x,$y){
	$r = [];
	
	if($x==$y){
		$r[] = 'equal';
	}
	
	if($x === $y){
		$r[] = 'Identical';
	}

	if($x != $y){
		$r[] = 'Not Equal_1';
	}

	if($x <> $y){
		$r[] = 'Not Equal_2';
	}

	if($x !== $y){
		$r[] = 'Not identical';
	}

	if($x > $y){
		$r[] = "Greater than: $x > $y";
	}

	if($x < $y){
		$r[] = "Less than: $x < $y";
	}

	if($x >= $y ){
		$r[] = "Greater than/Equal $x >= $y";
	}

	if($x <= $y){
		$r[] = "Less than/Equal: $x <= $y";
	}

	if($x <=> $y){
		$r[] = "Spaceship: $x <=> $y";
	}

	echo "<pre>"; print_r($r);
}

// comparisonOperators(35,5);


function lnDeOperators($x){
	
	++$x; // Pre-increment
	$x++; // Post-increment
	--$x; // Pre-decrement
	$x--; // Post-decrement

	echo "<pre>"; print_r($x);
}

// lnDeOperators(2);

function logicalOperators($x,$y){

	$r = array();
	if($x==100 and $y==200){
		$r[] = "$x=100 and $y=200";
	}

	if($x ==100 or $y==200){
		$r[] = "$x=100 Or $y=200";
	}

	if($x==100 Xor $y==200){
		$r[] = "$x=100 Xor $y=200";
	}

	if($x==100 && $y==200){
		$r[] = "$x=100 && $y=200";
	}

	if($x==100 || $y==200){
		$r[] = "$x=100 || $y=200";
	}

	echo "<pre>"; print_r($r);
}

logicalOperators(100,200);

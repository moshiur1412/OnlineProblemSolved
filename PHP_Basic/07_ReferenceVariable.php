<?php

error_reporting(E_ALL); ini_set('display_errors', '1');

$c = "Canada";
$c = &$b; // ampersand sign (&)
$b = "Bangladesh";

// echo $c, "<br>";
// echo $b;


# Reference Variable Types
// 1.	Assigning By Reference
// 2.	Passing By Reference
// 3.	Returning By Reference


# Passing by Refereces 
function goodbye(&$greeting){
	$greeting = "Allah Hafez!";
}

$myValue = "Hi there";
goodbye($myValue);
// echo $myValue; // Allah Hafez;



# Returing By Reference
$a =10;
function &test(){
	global $a;	
	return $a;
}

$b = &test();
$b--;
// echo $a; // 9
// echo $b; // 9



## Practices --->

$brands = array("The Islamic Product", "The Halal Product", "The Best Buy");

foreach($brands as &$brand){
	$brand = strtoupper($brand);
}

// echo "<pre>"; print_r($brands);



class allCountries{
	public $a = "Albania";
	public $b = "Bangladesh";
	public $c = "Canada";
}

$countries = new allCountries;

foreach($countries as &$country){
	$country = strtoupper($country);
}

echo "<pre>"; print_r($countries);





// $aj = '1';
// $ra = &$aj; 			 // 1	-> changed by nextLine	
// $ra = "2$ra";		// 21 	-> changed by reference ($ra)

// // Output: 21, 21
// echo $aj.", ".$ra;



# Sample came from codementor.io

$a = '1';
$b = &$a;
$b = "2$b";

// echo $a. ", ".$b; // 21, 21






?>
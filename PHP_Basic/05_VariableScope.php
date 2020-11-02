<?php
 # PHP Variable Scope 

$b = "b";
function variableScope(){
	$a ="a"; // Local Scope
	$b = "b"; // local Scope
	echo $a."<br>";

	global $b; // Global Scope
	echo $b."<br>";

	echo $GLOBALS['b']."<br>"; // Local Scope
}

// variableScope();
// echo $b; // Local Scope



# Static Keyword : Basically, after function execute; the local variable has been removed but if need any variable static worked for that.


function testStaticVariable(){
	static $x = 0;
	echo $x;
	$x++;
}

// if not static output -> 000 
testStaticVariable(); // 0
testStaticVariable(); // 1
testStaticVariable(); // 2

?>
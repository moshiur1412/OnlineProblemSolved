<?php 
	# PHP Ternary Operators
	// Condition?Exception1:Exception2

	$age = 30;

	echo $age<30?"You'r eligible":"Not eligible";

	echo $age <=30 ?? "Default"; // 1


   # Null Coalescing Operator
	$foo = null;
	$bar = null;
	$baz = 1;
	$quz =2;

	echo $foo??$quz; //2

	echo $foo??$bar??$baz??$quz; // 1

?>
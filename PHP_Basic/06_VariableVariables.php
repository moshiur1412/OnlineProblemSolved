<?php
	# When a variable kept another variable value 

	$city = "Dhaka";
	// $Dahka = "104 Square Miles";

	$$city = "Variable Varaibles set";

	// echo $Dhaka; // Variable Varaibles set
	// echo ${$city};


$Bar = "a";
$Foo = "Bar";
$World = "Foo";
$Hello = "World";
$a = "Hello";

echo $a; // Hello
echo $$a; // World
echo $$$a; // Foo
echo $$$$a; // Bar
echo $$$$$a; // a
echo $$$$$$a; // Hello


$price_for_monday = 10;
$price_for_tuesday = 20;
$price_for_wednesday = 30;

$today = "tuesday";

$price_for_today = ${'price_for_'.$today};

echo $price_for_today; // 20





	
?>
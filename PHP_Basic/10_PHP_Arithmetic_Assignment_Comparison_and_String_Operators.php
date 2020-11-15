<?php
	echo 8+5; // 13
	echo "<br>";
	echo 8-5; // 3
	echo "<br>";
	echo 8*5; // 40
	echo "<br>";
	echo 8/5; // 1.6
	echo "<br>";
	echo 8%5; // 3
	echo "<br>";
	echo 8**5; // 32,768
	echo "<br>";

	echo "<hr>";

	$c = 8+5; // 13
	echo $c, "<br>";
	$c += 5; // 18
	echo $c, "<br>";
	$c -= 5; // 13
	echo $c, "<br>";
	$c *=5;	// 65
	echo $c, "<br>";
	$c /=5;	// 13
	echo $c, "<br>";
	$c %=5; // 3
	echo $c, "<br>";
	$c **=5; // 243
	echo $c, "<br>";

	echo "<hr>";


	echo 8 == 5; 	// empty
	echo "<br>";
	echo 8 != 5; 	// 1
	echo "<br>";
	echo 8 === "5";	// empty
	echo "<br>";
	echo 8 !== "5"; // 1
	echo "<br>";
	echo 8 < 5; 	// 
	echo "<br>";
	echo 8 > 5;		// 1
	echo "<br>";
	echo 8 <= 5; 	// 
	echo "<br>";
	echo 8 >= 5; 	// 1
	echo "<br>";
	echo 8 <> 5;	// 1
	echo "<br>";
	echo 8 <=> 5;	// 1
	echo "<br>";

	echo "<hr>";


	echo "Hello " . "world!";
	echo "<br>";
	print "Hello ". "world!";

	echo "<br>";

	$a="Hello ";
	$a.="world!";

	echo $a;



?>
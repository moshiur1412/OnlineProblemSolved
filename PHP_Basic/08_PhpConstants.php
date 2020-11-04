<?php
	define("c", "Canada");
	const b = "Bangladesh";

	define("C", "CANADA");

	$c = 13;
	// echo $c;

	// const b = 23; // alreay defined

	// define("c", "test"); // already defined


	// echo c,b,C;



	function test(){
		define("TEST", "Test const Value");
	}

	// test();

	// echo TEST; // "test const value"


	define("TEST", "Test const Value");
	
	function test2(){
			echo TEST;
	}

	test2(); // Test const Value
?>
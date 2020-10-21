<?php
$a = 1; // global scope
function test(){
	echo $a; // reference to local scope varlible 
}
// Notice: Undefined variable: a
// test();



$a = 1;
$b = 2;

function sum(){
	global $a, $b;
	$b = $a + $b;
}

// sum();
// 3
// echo $b;

# instend of global
function sum2(){
	$GLOBALS['b'] = $GLOBALS['a'] + $GLOBALS['b'];
}
// sum2();
// 3
// echo $b;

$name = 'super global varible';

#super global
function test_superglobal(){
	// echo $_POST['name']; // error
	echo $GLOBALS['name'];
}
// super global varible
// test_superglobal();


# Static Varoable
function test2(){
	static	$a = 0;
	echo $a;
	$a++;
}

// test2(); // 0
// test2(); // 1


# static variable with recursive function
function test3(){
	static $count = 0;
	$count++;
	echo $count;
	if($count<10){
		test3();
	}
	$count--;
}

// test3(); // 12345678910

# declaring static vaariables
function foo(){
	static $int = 0;
	static $int = 1+2;
	// static $int = sqrt(121); // wrong as it is a function

	$int++;
	echo $int;
}

// foo(); // 123456789104


# References with global and static variables

function test_global_ref(){
	global $obj;
	$new = new stdclass;
	$obj = &$new;
}

function test_globla_noref(){
	global $obj;
	$new = new stdclass;
	$obj = $new;
}


// NULL object(stdClass)#1 (0) { }
test_global_ref();
var_dump($obj);
test_globla_noref();
var_dump($obj);
?>
<?php
# Normal Class Example -->
Class NormalClass{
	public function log(){
		return "This is the normal class";
	}
}

$obj = new NormalClass;
// echo $obj->log()."<br>"; // output-> This is the normal class


// Example of single use anonymous class
$test = (new class {
	public function log(){
		return "This is the anonymous log";
	}
}); 
// echo $test->log()."<br>"; // output-> This is the anonymous log

interface testInterface{
	public function testInterfaceMethod();
}

Trait testTrait{
	public function testTraitMethod(){
		return "<br> Hello, I\'m test trait Method";
	}
}

class parentClass{
	public function __construct($message){
		echo $message;
	}
}

$message = "I'\m message for normal variable";

$testAnonymous = (new class($message) extends parentClass implements testInterface{
	use testTrait;
	public function testInterfaceMethod(){
		return "This is the testInterfaceMethod called";
	}

});

echo $testAnonymous->testTraitMethod()."<br>";
echo $testAnonymous->testInterfaceMethod()."<br>";







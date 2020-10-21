<?php
class oop{
	public function __construct(){
		echo "Welcome to PHP World!";
	}
	public function sayHello(){
		echo "Hello World";
	}
	
	public function __destruct(){
		echo "<br>I'm about to disappear - bye bye!";
	}
	
}
$obj=new oop;

echo "<br>";

$obj->sayHello();

?>
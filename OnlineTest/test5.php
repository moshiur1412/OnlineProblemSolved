<?php

// final class A { // final class not extends -->
Class A{

	public function display(){
		echo 'this is the final class diplay() method';
	}

	public string $string = "1,2,3,4,5,6,7";

	public function sumString(){
		return array_sum(explode(',', $this->string));
	}
}

class B extends A{
	public function  display2(){
		echo "This is the B class display2() method";
	}
}


$obj = new B;
// $obj->display();
echo $obj->sumString();

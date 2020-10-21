<?php
header('Content-type: text/plain');

class test{
	public $name;
	private $mobile;
	public function __construct($name, $mobile){
		$this->name = $name;
		$this->mobile = $mobile;
	}
}


$obj = new test("Abdur Rahim", "0172200000");
$obj1 = clone $obj;
$obj1->name ="Karim";
print_r($obj);
print_r($obj1);
?>
<?php
class person {

	private $name="";
	private $age="";

	public function setName($name=""){
		$this->name=$name;  
		return $this; 
	}
	public function setAge($age="20"){
		$this->age=$age;
		return $this;
	}

	public function getInfo(){
		echo "Hello, My name is ".$this->name." and my age is ".$this->age." years.";
	}
}

$person = new person();
$person->setName("Masud Alam")->setAge("33")->getInfo();

class OOP{
	public static $val;

	public static function init($var){
		static::$val=$var;
		return new static;      
	}

	public static function add($var){
		static::$val+=$var;
		return new static;
	}

	public static function sub($var){
		static::$val-=$var;
		return new static;
	}

	public static function out(){
		return static::$val;
	}

}

echo OOP::init(10)->add(2)->sub(5)->out(); //Result: 10+2-5=7
echo "<br>"; 
echo OOP::sub(2)->out(); //Result: 7-2=5;



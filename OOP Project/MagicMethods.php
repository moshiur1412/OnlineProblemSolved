<?php
header('Content-type: text/plain');

class MagicMethods{

	private $name = "magic";
	private $arr = [1,2,3];
	public $publicVal = "public value";
	protected $proVal = "Protected Value";

	public function __construct(){
		echo "Called __construct :: new MagicMethods()"."\n";
	}

	public function __destruct(){
		echo "Called __destruct :: new MagicMethods()"."\n";
	}

	/**
	* @param $name, $arguments
	* Called when $obj->runTest();
	*/
	public function __call($name, $arguments){
		echo "Called __call :: obj->runTest($name)". "\n";
		print_r($arguments);
	}

	/**
	* Must be static method
	* @param $name, $arguments
	* called when Class::runTest();
	*/

	public static function __callStatic($name, $arguments){
		echo "Called __callStatic :: MagicMethods::runTest($name)"."\n";
		print_r($arguments);
	}

	/**
	* @param $name
	* Called when $obj->m
	*/
	public function __get($name){
		echo "Called __get :: obj->get($name)"."\n";
	}

	/**
	* @param $name, $arguments(value)
	* called when $obj->m = 1
	*/
	public function __set($name, $arguments){
		echo "Called __set :: obj->set($name, $arguments)"."\n";
	}

	/**
	* @param $name
	* call isset();
	*/
	public function __isset($name){
		echo "Called __isset :: isset(obj->a = $name)"."\n";
	}

	/** 
	* @param $name
	* called unset()
	*/
	public function __unset($name){
		echo "Called __unset :: unset(obj->a = $name)"."\n";
	}


	public function __sleep(){

		return [$this->publicVal];
		echo "Called sleep"."\n";
	}

	public function __wakeup(){
		echo "Called wakeup"."\n";
	}

	/**
	* Called serialize()
	* return array
	*/
	public function __serialize(){
		echo "Called __serialize :: serialize()"."\n";
		return array();
	}

	public function __unserialize(){
		echo "Called __unserialize :: unserialize()"."\n";
	}

	/**
	* @return string value
	*/
	public function __toString(){
		echo "Called __toString :: $this->publicVal"."\n";

		return $this->publicVal;
	}

	public function __invoke(){
		echo "Called invoke"."\n";
	}

	public function __set_state(){
		echo "Called set_state"."\n";
	}

	public function __clone(){
		echo "Called __clone :: clone obj;"."\n";
	}

	public function __debugInfo(){
		echo "Called debugInfo"."\n";
	}

}

// __construct && __destruct 
$obj = new MagicMethods();

// __call && __callStatic
$obj->runTest("name","arg");
MagicMethods::runTest("staic");

// __set && __get
$obj->sVal = 'setVal';
$obj->sVal;

// __isset && __unset 
isset($obj->testVal);
unset($obj->testVal);

// __sleep && __weakup


// __serialize && __unserialize 
$serialize = serialize($obj);
echo "Converted the MagicMethods to a string: $serialize \n";
$unserialize = unserialize($serialize);
echo "Converted the MagicMethods to a string: $unserialize \n";

// __clone
clone $obj;

class Member{
  public $Name="Masud Alam";
  public $Email="masud@mail.com";
  public $mobile="01788990099";
  public  $address="Dhaka,Bangladesh";
  public function __sleep(){
    return ["Name","Email"];
  }
}
  
$member = new Member();
  
$memberString = serialize( $member );
 
echo $memberString . "\n";


?>
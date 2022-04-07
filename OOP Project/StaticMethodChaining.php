<?php
Class OOP{
	public static $val;

	public static function init($var){
		 static::$val = $var;
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

echo OOP::init(10)->add(10)->sub(5)->out();
?>
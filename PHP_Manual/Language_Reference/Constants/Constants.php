<?php

class Constants{

	const MIN_VALUE = 0.0;
	const MAX_VALUE = 1.0;

	public static function getMinValue(){
		return self::MIN_VALUE;
	}
	public static function getMaxValue(){
		return self::MAX_VALUE;
	}
}

// float(0)
var_dump(Constants::MIN_VALUE);
echo "<hr>";

// float(1)
var_dump(Constants::MAX_VALUE);
echo "<hr>";

// 0
echo Constants::getMinValue();
echo "<hr>";
<?php
namespace Language_Reference\Constant;
# 3
// echo __LINE__; // The current line number of the file

# var/www/html/HackerRankSolutions/PHP_Manual/Language_Reference/Constants/MagicConstrant.php
// echo __FILE__; // Full Path with file name

# /var/www/html/HackerRankSolutions/PHP_Manual/Language_Reference/Constants
// echo __DIR__; // directory of the file


trait TraitFirst {
	function traitName(){
		echo __TRAIT__; // show trait name
	}
}

trait TraitNext {
	use TraitFirst;
}

class Main{
	use TraitNext;

	function classConstant(){
		echo __class__; // show class name
	}

	function methodConstant(){
		echo __method__; // name of current method
	}

	function nameSpaceConstant(){
		echo __namespace__; //  namespace keyword worked for that.
	}
}


# TraitFirst
// (new Main)->traitName();


$obj = new Main;
# Main 
// $obj->classConstant();

# Main::methodConstant
// $obj->methodConstant();
// Language_Reference\Constant;
$obj->nameSpaceConstant();



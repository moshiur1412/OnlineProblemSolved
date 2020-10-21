<?php
 // PHP Reference Variable হচ্ছে কোনো একটা নির্দিষ্ট variable এর value বা content এ ভিন্ন ভিন্ন Variable নামে ব্যবহার করতে পারা।

# PHP তে Reference ব্যবহার করে আমরা তিনটি মৌলিক কাজ করতে পারি

// Assigning by Reference 
// Passing by Reference
// Returning Reference 

function assigningByReference(){
	$a = "Hi there,";
	
	$b = $a; // not changed $b
	$b = &$a; // a & b value same 

	$b = " See you later! ";
	$a = " GoodBye! ";

	echo $a;
	echo $b;

}

// assigningByReference();

function passgingByReference(&$greeting){
	// $greeting = "See you later!";
	$greeting++;
}

$myVar = "Hi, there";
$myVar = 7;
passgingByReference($myVar);
// echo $myVar;

$a = 10;
function &returningReference(){
	global $a;
	return $a;
}

$b = &returningReference();
$b--;

echo "\$a = $a <br>";
echo "\$b = $b <br>";


function testArray($arr){
	foreach($arr as &$value){
		$value = strtoupper($value);
	}
	echo "<pre>"; print_r($arr);
}

$arr = ["a","b","c"];
testArray($arr);
?>
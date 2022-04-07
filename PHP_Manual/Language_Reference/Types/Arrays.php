# Array : An array in PHP is actually an ordered map. A map is a that associates values to keys.

<hr>
<?php

$array = array(
	'a'			=>		'a',	// a => a
	0			=>		0,		// 0 => 0
	1			=>		1,		// print
	1.5			=>		1.5,	// not print
	true 		=>		false, 	// changed 1 => null
	true 		=>		true,	// changed 1 => 1
	false 		=>		false,	// chaged 0 => null  
	false 		=>		true,	// changed 0 => 0
);

// echo 'function::var_dump($array)'."<br>"; 
// var_dump($array);

// print "<pre>"; print_r($array);

// output: function::count($array)= 3
// echo 'function::count($array)= ', count($array), "\n";
// output: function::sizeof($array)= 3
// echo 'function::sizeof($array)= ', sizeof($array),"\n";



// echo "<hr>";

$array = array(1,2,3,4,5);
// print_r($array);

// Now delete every item, but leave the array
# for loop not perfect --> case
for($i=0; $i< count($array); $i++){
	// unset($array[$i]);	// changed array count value 
	// print_r($i."\n");
}

foreach($array as $k => $arr){
	unset($array[$k]); 	// removed full array by key
}

// print_r($array);


// Append an item (note that the new key is 5, instead of 0)
$array[] = 6;
// print_r($array);

// Re-index
$array = array_values($array);
$array[] = 7;
// Output: 0 => 6, 1 => 7
// print_r($array); 


// Error Reports
error_reporting(E_ALL);
ini_set('display_errors', true);
ini_set('html_errors', false);

// simple array
$array = array(1,2);
$count = count($array);

for($i=0; $i< $count; $i++){
	// echo "\nChecking $i: \n";

	// echo "Bad:".	$array['$i']	.	"\n";
	// echo "Good:".	$array[$i]		.	"\n";

	// echo "Bad:	{$array['$i']} \n";
	// echo "Good:{$array[$i]}\n";
}

# Reference operator
$arr1 = array(2,3);
$arr2 = $arr1;

// $arr2 is chaged
$arr2[] = 4; 

// $arr1 is still array(2,3)
$arr3 = &$arr1;			// same value for both by next line

// now $arr1 and $arr3 are the same
$arr3[] = 4;			// changed by refrence 

// print_r($arr3);		// 0=>2, 1=>3, 2=>4
print_r($arr2);		// 0=>2, 1=>3, 2=>4




?>
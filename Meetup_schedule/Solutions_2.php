<?php

echo 'بسم الله الرحمن الرحيم'.'<br><hr>';

define('STDIN',fopen("input.txt", "r"));


function countMeetings($firstDay, $lastDay){
 

  $days = array_unique(array_merge($firstDay, $lastDay));

  $sets = array_map('getValues', $firstDay, $lastDay,$days);

  echo "<pre>"; print_r($sets);

  // $result = 0;
  // for($i=0; $i<count($sets); $i++){
  // 	if(array_intersect($days, $sets[$i])){
  // 		array_shift($days);
  // 		$result = ++$result;
  // 	}
  // }

  //   return $result;
  
}

function getValues($a1, $a2, $d){
	return [$d => [$a1, $a2]];
}
 
// $fptr = fopen(getenv("OUTPUT_PATH"), "w");
$fptr = fopen("output_meetup.txt", "w");


$firstDay_count = intval(trim(fgets(STDIN)));
$firstDay = array();

for($i = 0; $i < $firstDay_count; $i++){
    $firstDay_item = intval(trim(fgets(STDIN)));
    $firstDay[] = $firstDay_item;
}


$lastDay_count = intval(trim(fgets(STDIN)));
$lastDay = array();

for($i=0;  $i < $lastDay_count; $i++){
    $lastDay_item = intval(trim(fgets(STDIN)));
    $lastDay[] = $lastDay_item;
}

$result = countMeetings($firstDay, $lastDay);

fwrite($fptr, $result. "\n");

fclose($fptr);

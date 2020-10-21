<?php

echo 'بسم الله الرحمن الرحيم'.'<br><hr>';

define('STDIN',fopen("input.txt", "r"));


function countMeetings($firstDay, $lastDay){
 
  $sets = array_map('getValues', $firstDay, $lastDay);

  $days = array_unique(array_merge($firstDay, $lastDay));
  
  $result = 0;

  for($i=0; $i<count($sets); $i++){
    
    $findValue = array_intersect($days, $sets[$i]);

     foreach(array_splice($findValue,0,1) as $v){
    
        $key = array_search($v, $days);

        unset($days[$key]);

         $result = ++$result;
     }

  }

   return $result;
  
}


function getValues($a1, $a2){
	return [$a1, $a2];
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

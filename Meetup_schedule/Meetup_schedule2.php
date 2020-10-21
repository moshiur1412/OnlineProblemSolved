<?php

echo 'بسم الله الرحمن الرحيم'.'<br><hr>';

define('STDIN',fopen("meetup_schedule.txt", "r"));

function countMeetings($firstDay, $lastDay){
    
    $unique_value = array_unique(array_merge($firstDay, $lastDay));
    
    $set_number = array_map('getSetNumber', $firstDay, $lastDay);
  
    $count = 0;
    $value=[];
    foreach($set_number as $key => $set){
        foreach($set as $k => $v){
           if($unique_value[$k] == $v){
                $value [] = $v;
           }

        }
    }
    echo "<pre>"; print_r($value);


    
}

function getSetNumber($firstDay, $lastDay){
    return  [$firstDay, $lastDay];
}


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

<?php

echo 'بسم الله الرحمن الرحيم'.'<br><hr>';

define('STDIN',fopen("meetup_schedule.txt", "r"));

function countMeetings($firstDay, $lastDay){
    
    
    $final_results = array_map('getResults', $firstDay, $lastDay);
    
    $count = 0;
    foreach($final_results as $key=> $whole_days)
    {   
        foreach($whole_days as $k => $v){
            
            if($k == $v){  
                $fixed_day[] = $v;
                
                unset($whole_days[$k]);
            }
            $another_day[] = $whole_days;
            
        }
        
    } 
    array_unshift($another_day, $fixed_day);
    
    $max_value = max(array_merge($firstDay, $lastDay));
    // print_r($max_value);

    foreach(array_filter($another_day) as $key => $value) {
        
        foreach($value as $k => $v) {
            print_r($v);
            if($v > $max_value){
                if($v - $k == 1){
                    echo $key. ": " . $k . ' => ' . $v ."<br>";  // 'some key => some value'

                }
            }
         
        }
    }
    
    echo "<pre>"; print_r($another_day);
    
    echo "<br><hr>";
    echo("Count:: ". $count);
    
}

function getResults($firstDay, $lastDay)
{
    return [$firstDay => $lastDay];
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

<?php

function countMeetings($start_day, $end_day){

    sort($start_day);
    sort($end_day);

    $sets = array_map('getEventsValue', $start_day, $end_day);

    for($size = 1; $size <= 100000; $size++) {  $days[] = $size; }

    $days = array_flip($days);

    $result = 0;

    $length =count($sets);

    for($i=0; $i <$length; $i++){

        $matched_value = getMatchedValue(array_flip($sets[$i]), $days);
               
        if(!empty($matched_value)){
            unset($days[$matched_value]); 
            ++$result; 
        }
    }

     return $result;

}

function getEventsValue($a1, $a2){
        return [$a1, $a2];

}

function getMatchedValue($arr, $keys)
  {
      $res = array();
      foreach (array_keys($arr) as $key){
        if (isset($keys[$key])){
          $res[$key] = $arr[$key];
        }
      }
      return array_key_first($res);  
  }





$file_write = fopen(getenv("OUTPUT_PATH"), "w");

$start_day_count = intval(trim(fgets(STDIN)));
$start_day = array();

for($i = 0; $i < $start_day_count; $i++){
    $start_day_item = intval(trim(fgets(STDIN)));
    $start_day[] = $start_day_item;
}


$end_day_count = intval(trim(fgets(STDIN)));
$end_day = array();

for($i=0;  $i < $end_day_count; $i++){
    $end_day_item = intval(trim(fgets(STDIN)));
    $end_day[] = $end_day_item;
}

$final_results = countMeetings($start_day, $end_day);

fwrite($file_write, $final_results. "\n");

fclose($file_write);

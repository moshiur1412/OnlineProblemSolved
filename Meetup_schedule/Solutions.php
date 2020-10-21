<?php

echo 'بسم الله الرحمن الرحيم'.'<br><hr>';

define('STDIN',fopen("test.txt", "r"));

function countMeetings($start_day, $end_day){

	sort($start_day);
	sort($end_day);
	// $start_day = array_values(array_unique($start_day));
	$ee = array_values(array_unique(array_merge($start_day, $end_day)));

		echo "<pre>"; print_r( $ee);

    $sets = array_map('getEventsValue', $start_day, $end_day);
 
		// echo "<pre>"; print_r( $sets);

//     $f = fopen('m.txt', 'w');

// for ($sets as $k => $s) { 
// 	fwrite($f, $s."\n");
// }
// 	fclose($f);


    for($size = 1; $size <= 100000; $size++) {  $days[] = $size; }

    $days = array_flip($days);

    $result = 0;

    $length = count($sets);

    for($i=0; $i <$length; $i++){
		// echo "<pre>"; print_r(array_flip($sets[$i]));

        $matched_value = getMatchedValue(array_flip($sets[$i]), $days);
		// echo "<pre>"; print_r( $matched_value);

        if(!empty($matched_value)){
            unset($days[$matched_value]); 
            ++$result; 
        }
    }
		// echo "<pre>"; print_r( $days);

	echo "<pre>"; print_r( $result);

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




// echo "<pre>"; print_r( array_flip($sets[$i]));
// $file_write = fopen(getenv("OUTPUT_PATH"), "w");
$file_write = fopen("output_meetup.txt", "w");


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

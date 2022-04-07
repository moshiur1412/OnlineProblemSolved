<?php
$_fp = fopen("php://stdin", "r");

$n = rtrim(fgets($_fp), "\r\n");
$a = rtrim(fgets($_fp), "\r\n");
$a = explode(" ", $a);
sort($a);

echo array_mean($a);
echo "\n";
echo array_median($a);
echo "\n";
echo array_mode($a);


function array_mean($arr){
    $count = count($arr);
    $sum = array_sum($arr);
    $mean = $sum/$count;
    return round($mean,2);
}


function array_median($arr) {
    $count = count($arr); //total numbers in array
    $middleval = floor(($count-1)/2); // find the middle value, or the lowest middle value
    if($count % 2) { // odd number, middle is the median
        $median = $arr[$middleval];
    } else { // even number, calculate avg of 2 medians
        $low = $arr[$middleval];
        $high = $arr[$middleval+1];
        $median = (($low+$high)/2);
    }
    return round($median,2);
}


function array_mode($arr) {
  $count = array();
  foreach ((array)$arr as $val) {
    if (!isset($count[$val])) { $count[$val] = 0; }
    $count[$val]++;
  }
  $mode = array_search(max($count), $count);
  return $mode;
}


?>
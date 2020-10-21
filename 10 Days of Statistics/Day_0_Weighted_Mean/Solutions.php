<?php

 $f = fopen('input.txt', 'r');

$n = fgets($f);
$x = explode(" ", fgets($f));
$w = explode(" ", fgets($f));

$marge = array_map('solution', $x, $w);

$result = array_sum($marge)/array_sum($w);
// echo "<pre>"; print_r(round($result, 1));

echo  number_format($result,1,'.', '0');


function solution($x,$w){
	$r = (float)$x*(float)$w;
	return $r;
}
?>
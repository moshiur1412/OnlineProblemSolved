<?php
	$f = fopen('input.txt', 'r');

	function quartile($arr) {
		$count = count($arr);
			$middleval = floor(($count-1)/2); // find the middle value, or the lowest middle value
		if($count % 2) { // odd number, middle is the median
			$median = $arr[$middleval];
		} else { // even number, calculate avg of 2 medians
			$low = $arr[$middleval];
			$high = $arr[$middleval+1];
			$median = (($low+$high)/2);
		}
		// return number_format((float)$median, 2, '.', '');
		return $median;

	}

	$n = fgets($f);
	$arr =  explode(" ", fgets($f));
	sort($arr);

	$second = quartile($arr);

	$tmp = array();
	foreach ($arr as $key=>$val) {
	  if ($val > $second) {
	  		$tmp['third'][] = $val;
	  } else if ($val < $second) {
	    	$tmp['first'][] = $val;
	  }
	} 

	$first = quartile($tmp['first']);
	$third = quartile($tmp['third']);

	print($first. "\n");
	print($second. "\n");
	print($third. "\n");

<?php

	$_fp = fopen('input4.txt', 'r');
	$n = explode(" ", fgets($_fp));
	$e = explode(" ", fgets($_fp));
	$f = explode(" ", fgets($_fp));


	for($i=0; $i<count($e); $i++){
		for($j=0; $j<$f[$i]; $j++){
			$a[] = (int)$e[$i];
		}
	}

	sort($a);
	echo "<pre>"; print_r($a);
	echo "<hr>";

	function median($a){
		$n = count($a);
		$mid_index = floor($n-1)/2;
		

		if($n % 2){
			$median = $a[$mid_index];
		}else{
			$low = $a[$mid_index];
			$high = $a[$mid_index+1];
			$median = ($low+$high)/2;
		}

		return number_format((float)$median,1);
	}

	$Q2 = median($a);


	$tmp = [];
	
	foreach($a as $k =>$v){
		if($v > $Q2){
			$tmp['Q3'][] = $v;
		}else if($v < $Q2){
			$tmp['Q1'][] = $v;
		}
	}

	$Q1 = median($tmp['Q1']);
	$Q3 = median($tmp['Q3']);
	
	print('Q1: '. $Q1);
	echo "<br>";
	print('Q2: '. $Q2);
	echo "<br>";
	print('Q3: '. $Q3);
	echo "<br>";

	$IQR = $Q3 - $Q1;

	print(number_format((float)$IQR,1));

	
?>
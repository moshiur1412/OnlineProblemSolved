<?php

	$_fp = fopen("php://stdin", "r");
	$n = explode(" ", fgets($_fp));
	$e = explode(" ", fgets($_fp));
	$f = explode(" ", fgets($_fp));


	for($i=0; $i<count($e); $i++){
		for($j=0; $j<$f[$i]; $j++){
			$a[] = (int)$e[$i];
		}
	}
	
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

	function IQR($a){
		$tmp = [];
		$n = count($a);
		$first_half = $n /2;

		foreach($a as $k=> $v){
			if($k < $first_half){
				$tmp['Q1'][] = $v;
			}else{
				$tmp['Q3'][] = $v;
			}
		}

		$Q1 = median($tmp['Q1']);
		$Q3 = median($tmp['Q3']);

		return $Q3 - $Q1;
	}

	sort($a);
	print(number_format((float)IQR($a),1));

	
?>
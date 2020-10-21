<?php
	
	$_fp = fopen("input.txt", 'r');
	$n = (int)fgets($_fp);
	$value = explode(" ", fgets($_fp));

	echo "<pre>"; print_r($value);

	function mean($value, $n){
		$mean = array_sum($value)/$n;
		return $mean;
	}

	function sequaredDistance($value, $n){
		$mean = mean($value, $n);

		for($i=0; $i<$n; $i++){
			$sd[] = pow($value[$i]- $mean,2);
		}
		return array_sum($sd);

	} 

	function standardDiviation($value, $n){
		$sd = sequaredDistance($value, $n);
		$result = round(sqrt($sd/$n),1);

		return $result;

	}


	echo "<pre>"; print_r(standardDiviation($value, $n));



?>
<?php
	
	$_fp = fopen("php://stdin", 'r');
	$n = (int)fgets($_fp);
	$value = explode(" ", fgets($_fp));


	function mean($value, $n){
		return array_sum($value)/$n;
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


	print(standardDiviation($value, $n));



?>
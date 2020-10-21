<?php

$arr = [2,3,5,1,8,22,55,66,33,11,7];

// echo min_value($arr);
// echo max_value($arr);

function min_value($arr){
	$n = count($arr)-1;
	
	for($i=0; $i <= $n; $i++){
		$min = $arr[$i];
		
		for($j=1; $j <=$n; $j++){	
			if($min > $arr[$j]){ 
				$min = $arr[$j];
			}
		}

		return $min;
	}
}

function max_value($arr){
	$n = count($arr) -1;

	for($i=0; $i<=$n; $i++){
		$max = $arr[$i];

		for($j=1; $j<=$n; $j++){
			if($max < $arr[$j]){
				$max = $arr[$j];
			}
		}
		
		return $max;
	}
}

?>
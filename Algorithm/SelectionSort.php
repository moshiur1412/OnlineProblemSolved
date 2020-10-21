<?php

$arr = [8,5,7,2,1,55];

echo "<pre>";print_r(selection_sort($arr));

function selection_sort($arr){
	$n = count($arr);
	
	for($i=0; $i < $n; $i++){
		$index_min = $i;
		
		for($j=$i+1; $j <$n; $j++){	
			if($arr[$j] < $arr[$index_min]){ 
				$index_min = $j;
			}
		}

		if($index_min != $i){
			$tmp = $arr[$i];
			$arr[$i] = $arr[$index_min];
			$arr[$index_min] = $tmp;
		}
	}
	
	return $arr;

}
?>
<?php

	$arr = [10,5,2,8];

	print_r(bubble_sort($arr));

	function bubble_sort($arr){

		$n = count($arr);

		for($i=0; $i<$n; $i++){

			for($j=0; $j<$n-$i-1; $j++){ // n-1

				if($arr[$j] > $arr[$j+1]){
					$temp = $arr[$j];
					$arr[$j] = $arr[$j+1];
					$arr[$j+1] = $temp;
				}
			}
		}
		return $arr;

	}

	

?>
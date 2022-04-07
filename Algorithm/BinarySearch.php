<?php
	
	$arr= [1,2,3];

	print(binary_search($arr, 3));

	function binary_search($arr, $s){
		$n = count($arr);
		$left = 0;
		$right = $n -1;

		while($left <= $right){

			$mid_index = round(($left+ $right)/2); // 1

			if($arr[$mid_index] == $s){
				return $mid_index;
			}

			if($arr[$mid_index] > $s){
				$right = $mid_index - 1;
			}else{
				$left = $mid_index + 1;
			}

		}

		return -1;
	}

?>
<?php
	$arr = [1,2,3,4,5,6];

	echo linear_search($arr, 45);

	function linear_search($arr, $s){
		
		for($i=0; $i<count($arr); $i++){
			if($arr[$i] == $s){
				return $i;
			}
		}
		
		return -1;
	}
?>
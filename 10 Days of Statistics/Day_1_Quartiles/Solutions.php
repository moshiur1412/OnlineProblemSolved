<?php
	$file = fopen('input.txt', 'r');

	$n = fgets($file);
	$arr =  explode(" ", fgets($file));
	
	sort($arr);

	$arr = [8,5,7,2,1,55];

	echo "<pre>";print_r(quartiles($arr));

	function quartiles($arr){
		$n = count($arr);
		$min = floor(($n-1)/2);

		for($i=0; $i < $n; $i++){
			
			if($n % 2){
				$mid = $arr[$min];
			}else{
				$low = $arr[$min];
				$high = $arr[$min+1];
				$mid = ($low+$high)/2;
			}
		}
		
			return $mid;	
			

	}

	
?>
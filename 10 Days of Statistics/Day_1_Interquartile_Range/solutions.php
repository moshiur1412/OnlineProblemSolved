<?php

	$_fp = fopen('input.txt', 'r');
	$n = explode(" ", fgets($_fp));
	$e = explode(" ", fgets($_fp));
	$f = explode(" ", fgets($_fp));

	for($i=0; $i<6; $i++){
		for($j=0; $j<$f[$i]; $j++){
			$a[] = (int)$e[$i];
		}
	}

	$arr = array(1,19,7,6,5,9,12,27,18,2,15); 
	$n = count($arr);
	echo "<pre>"; print_r(IQR($arr,$n));

	function median($a, $l, $r) 
	{ 
	    $n = $r - $l + 1; 
	    $n = (int)(($n + 1) / 2) - 1; 
	    return $n + $l; 
	} 
	
	function IQR($a,$n){
		
		sort($a); 
  
	    // Index of median of entire data 
	    $mid_index = median($a, 0, $n); 
	  
	    // Median of first half 
	    $Q1 = $a[median($a, 0, $mid_index)]; 
	  
	    // Median of second half 
	    $Q3 = $a[$mid_index + median($a, $mid_index + 1, $n)]; 
	  
	    // IQR calculation 
	    return ($Q3 - $Q1);
	}

	
?>
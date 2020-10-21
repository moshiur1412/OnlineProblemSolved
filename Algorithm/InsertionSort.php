<?php
	
	$a = [5,4,2,3,1];

	echo "<pre>"; print_r(insertion_sort($a));

	function insertion_sort($a){

		$n = count($a);
		
		for($i=1; $i<$n; $i++){

			$item = $a[$i];
			$j = $i -1;

			while($j >= 0 && $a[$j] > $item){
				$a[$j+1] = $a[$j];
				$j = $j -1;
			}

			$a[$j+1] = $item;
		}

		return $a;

	}


?>
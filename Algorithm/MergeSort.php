<?php
	$a = [2,3,4,5];

	print_r(merge_sort($a));

	$left = 0;
	$right = count($a)-1;

	function merge_sort($a = [], $left, $right){
		if($left >= $right){
			return;
		}

		$mid = $left + ($right-$left)/2;

		merge_sort($a, $left, $mid);
		merge_sort($a, $mid+1, $right);

		merge($a, $left, $mid, $right);
	}


	function merge($a=[], $left, $mid, $right){
		$i;
		$index_a, $index_l, $index_r;
		$size_left, $size_right;

		$size_left = $mid - $left +1;
		$size_right = $right - $mid;

		$L[$size_left], $R[$size_right];

		for($i= 0; $i <$size_left; $i++){
			$L[$i] = $a[$left+1];
		}

	}

	function main(){
		 $i, $n = 8;
		 $a = [1,5,6,3,5,8,7,2,9];

		 merge_sort($a, 0, $n);

		 for($i=0; $i<=$n; $i++){
		 	printf("%d ", $a[$i]);
		 }

		 printf("\n");

	}

?>
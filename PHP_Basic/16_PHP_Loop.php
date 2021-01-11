<?php 

	// # Regular used --->
	// for($i=1; $i <= 10; $i++){ // start; condition; increment
	// 	echo $i, "<br>";
	// }

	// # Changed increment -->
	// for($i=1; $i <11; $i+=2):
	// 	echo $i, "<br>";
	// endfor;



	// # used body for condition
	// $i =1;
	// for(;;){
	// 	if($i<11){
	// 		echo $i, "<br>";
	// 		$i++;
	// 	}else {
	// 		break;
	// 	}
	// }


	# Sequence Number -->
	// 0 1 1 2 3 5 8 13 
	
	$f1 = 0;
	$f2 = 1;

	echo $f1, "<br>", $f2, "<br>"; // 0 1 
	
	for($i=0; $i<6; $i++){
		$f3 = $f2+$f1; // 1+0
		$f1 = $f2;
		$f2 = $f3;
		echo $f3, "<br>"; // 1 2 3 4 8 13 
	}





 ?>
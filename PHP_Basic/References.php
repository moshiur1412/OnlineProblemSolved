<?php
// $aj = '1';
// $ra = &$aj; 		// 1	-> changed by nextLine	
// $ra = "2$ra";		// 21 	-> changed by reference ($ra)

// // Output: 21, 21
// echo $aj.", ".$ra;



# Sample came from codementor.io

$a = '1';
$b = &$a;
$b = "2$b";

echo $a. ", ".$b;

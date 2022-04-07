<?php

// Complete the sockMerchant function below.
function sockMerchant($n, $ar) {

    sort($ar);
    
    $ar = array_count_values($ar);

    foreach($ar as $value) {
        if($value < 1){
			return null;
            
        }else{
        	$pair_value = $value /2;
            $total_number[] = (int)$pair_value;
		}
    }

 	
    return array_sum($total_number);

}


$fptr = fopen(getenv("OUTPUT_PATH"), "w");
$stdin = fopen("php://stdin", "r");

fscanf($stdin, "%d\n", $n);

fscanf($stdin, "%[^\n]", $ar_temp);

$ar = array_map('intval', preg_split('/ /', $ar_temp, -1, PREG_SPLIT_NO_EMPTY));

$result = sockMerchant($n, $ar);

fwrite($fptr, $result . "\n");

fclose($stdin);
fclose($fptr);

?>
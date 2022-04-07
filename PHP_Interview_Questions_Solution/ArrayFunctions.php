<?php 
$arr = ["a"=>"Apple","b"=>"Ball","Cat","Dog"];

// extract(array &$array [,int $flag = EXTR_OVERWRITE [, string $prexix = null]]) :int

extract($arr);

// echo "<pre>"; print_r($a); // Apple

$size = "large";
$var_array = array(
	"color" => "blue",
	"size"  => "medium",
	"shape" => "sphere"
);

extract($var_array, EXTR_PREFIX_SAME, 'mm');
// blue, large, sphere, medium
// echo "$color, $size, $shape, $mm_size";

// # Extract Roules 
// 1. EXTR_OVERWRITE 		=> default. On collision, the existing variable is overwritten
// 2. EXTR_SKIP 			=> On Collision, the existing variable is not overwritten
// 3. EXTR_PREFIX_SAME 		=> On collision, the variable name will be given a prefix
// 4. EXTR_PREFIX_ALL 		=> all variable names will be given a prefix
// 5. EXTR_PREFIX_INVALID 	=> Only invalid or numeric variable names will be given a prefix
// 6. EXTR_IF_EXISTS 		=> Only overwrite existing variables in the current symbol table
// 7. EXTR_PREFIX_IF_EXISTS => only add prefix if same variable exists
// 8. EXTR_REFS 			=> Extracts variables as refrences. 

$arr = ["A", "B", "C"];

extract($arr, EXTR_PREFIX_INVALID, "nn");

print_r($nn_0); // A

?>
<?php
	# PHP Operators:: It's a programming languare symbol which is interpreter assist methematical, relational and logical operation.

# PHP Operations are 11 kinds of Operations:

// 1. Arithmetic Operators (mathmatic): (+-*/**%)
// 2. Assignment Operators (kept variable value): =
// 3. Bitwise Operators (Binary worked): -(&|^~<<>>)
// 4. Comparison Operators (Compare two values): == != === !== < > <= >= <=>
// 5. Error Control Operators: @
// 6. Execution Operators (shell command) : `
// 7. Incrementing/Decrementing Operators (+1, -1): ++ --
// 8. Logical Operators: &&, ||, ! and or xor
// 9. String Operators: .
// 10. Array Operators (compare, union for array): +, ==, !=, ===, !==, <>
// 11. Type Operators(check class instance): instanceof



# Arithmetic Operation
function sum($a, $b){
	return $a+$b;
}

// echo sum(10,12);

# Assignment Operation
function ass($a = null){
	return $a;
}

// echo ass(20);

# Bitwish Operation
function bit(&$b){
	 $b = 10;
}
$b= 22;
bit($b);
echo $b; // 10



?>